<?php use yii\bootstrap4;
use yii\helpers\Html; ?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <title><?= Html::encode($this->title) ?></title>
</head>
<body>
<?php $this->beginBody() ?>
<div id="map" style="height: 100%; width:100%;"></div>
<script type="text/javascript">
    <?php try {
        $a = Yii::$app->db->createCommand('select *,ST_asGeoJSON(geom) as geojson from hanhchinh')->queryAll();
    } catch (\yii\db\Exception $e) {
    }
    $features=[];
    foreach ($a as $b){
        unset($b['geom']);
        $geometry=$b['geojson']=json_decode($b['geojson']);
        unset($b['geojson']);
        $feature=["type"=>"Feature","geometry"=>$geometry,"properties"=>$b];
        array_push($features,$feature);
    }
    $featureCollection=["type"=>"FeatureCollection","features"=>$features];
    $hanhchinh= json_encode($featureCollection);

    try {
        $c = Yii::$app->db->createCommand('select *,ST_asGeoJSON(geom) as geojson from khu_cn')->queryAll();
    } catch (\yii\db\Exception $e) {
    }
    $features1=[];
    foreach ($c as $d){
        unset($d['geom']);
        $geometry1=$d['geojson']=json_decode($d['geojson']);
        unset($d['geojson']);
        $feature1=["type"=>"Feature","geometry"=>$geometry1,"properties"=>$d];
        array_push($features1,$feature1);
    }
    $featureCollection1=["type"=>"FeatureCollection","features"=>$features1];
    $khu_cn= json_encode($featureCollection1);

    $a2= Yii::$app->db->createCommand('select *,ST_asGeoJSON(geom) as geojson from so_nganh')->queryAll();
    $features2=[];
    foreach ($a2 as $b2){
        unset($b2['geom']);
        $geometry2=$b2['geojson']=json_decode($b2['geojson']);
        unset($b2['geojson']);
        $feature2=["type"=>"Feature","geometry"=>$geometry2,"properties"=>$b2];
        array_push($features2,$feature2);
    }
    $featureCollection2=["type"=>"FeatureCollection","features"=>$features2];
    $so_nganh= json_encode($featureCollection2);
    ?>
    $(document).ready(function(){
        const map = L.map('map').setView([10.769444, 106.681944], 10);         //khung nhin
        L.control.defaultExtent().addTo(map);                                   //nut tro ve khung nhin ban dau
        L.control.scale({imperial: false, maxWidth:150}).addTo(map);            // thuoc ti le
        const baseLayers = {
            'Stamen Watercolor': L.tileLayer.provider('Stamen.Watercolor'),
            'WorldImagery': L.tileLayer.provider('Esri.WorldImagery').addTo(map)
        };
        let hc =<?=$hanhchinh?>;
        var items = [];
        var hanhchinh = new L.GeoJSON(hc,{
            style: function(feature) {
                var fillColor = feature.properties.color_hex;
                return {color: "#999", dashArray: '3', weight: 2, fillColor: fillColor, fillOpacity: 0.8 };
            },
            onEachFeature: function(feature, layer) {
                items.push(layer);
                layer.bindPopup("<center>" + "<strong>" + feature.properties.name
                    + "</strong>" + "<br/>" + "Dân số là: "
                    + feature.properties.dan_so + " người" + "</center>"),
                    that= this;
                layer.on('mouseover',function(e){
                    this.setStyle({
                        weight:2,
                        color: '#72152b',
                        dashArray: '',
                        fillOpacity: 0.5
                    });
                });
                layer.on('mouseout',function(e){
                    hanhchinh.resetStyle(e.target);
                });
            }
        }).addTo(map);
        let kcn=<?=$khu_cn?>;
        var khu_cn = new L.GeoJSON(kcn,{
            style: function(feature){
                var fillColor,
                    dientich = feature.properties.dientich;
                if (dientich>0) fillColor = "#FF00FF";
                else fillColor = "#FFFFED";
                return{color: "#999", dashArray: '3', weight: 2,
                    fillColor: fillColor, fillOpacity: 0.8};
            },
            onEachFeature: function(feature, layer){
                layer.bindPopup("<center>" + "<strong>" + feature.properties.ten
                    + "</strong>" + "<br/>" +"Tính chất: "
                    + feature.properties.tinhchat + "<br/>" +"Địa chỉ: "
                    + feature.properties.dia_chi + "</center>"),
                    that=this;
                layer.on('mouseover', function (e){
                    this.setStyle({
                        weight: 2,
                        color: '#72152b',
                        dashArray: '',
                        fillOpacity: 0.6
                    });
                });
                layer.on('mouseout', function (e) {
                    khu_cn.resetStyle(e.target);
                });
            }
        });
        let sn=<?=$so_nganh?>;
        var so_nganh = new L.GeoJSON(sn,{
            onEachFeature: function(feature, layer){
                layer.bindPopup("<center>" + "<strong>" + feature.properties.ten
                    + "</strong>" + "<br/>" + feature.properties.diachi
                    + "</center>")
            }
        });
        var overlayMaps = {
            "Lớp dữ liệu": {
                "Dân số": hanhchinh,
                "Cụm công nghiệp":khu_cn,
                "Sở ban ngành":so_nganh,
            }
        };
        L.control.groupedLayers(baseLayers,overlayMaps).addTo(map);                         //tao nhom basemap, layer
    
    });
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
