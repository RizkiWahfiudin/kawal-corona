<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corona extends WahfiudinController {
	public function __construct(){
		parent::__construct();
		include APPPATH.'views/tool/function.php';
	}
	public function positif(){
		$konten= 
		'{
			"name": "Total Positif",
			"value": "307,278"
		}';
		echo $konten;
	}
	public function sembuh(){
		$konten= 
		'{
			"name": "Total Sembuh",
			"value": "92,373"
		}';
		echo $konten;
	}
	public function meninggal(){
		$konten= 
		'{
			"name": "Total Meninggal",
			"value": "13,049"
		}';
		echo $konten;
	}
	public function indonesia(){
		$konten= '
		[
			{
				"name": "Indonesia",
				"positif": "514",
				"sembuh": "29",
				"meninggal": "48"
			}
		]
		';
		echo $konten;
	}
	public function provinsi(){
		$konten= '
		[{"attributes":{"FID":11,"Kode_Provi":31,"Provinsi":"DKI Jakarta","Kasus_Posi":353,"Kasus_Semb":23,"Kasus_Meni":29}},{"attributes":{"FID":12,"Kode_Provi":32,"Provinsi":"Jawa Barat","Kasus_Posi":59,"Kasus_Semb":5,"Kasus_Meni":9}},{"attributes":{"FID":16,"Kode_Provi":36,"Provinsi":"Banten","Kasus_Posi":56,"Kasus_Semb":1,"Kasus_Meni":3}},{"attributes":{"FID":15,"Kode_Provi":35,"Provinsi":"Jawa Timur","Kasus_Posi":41,"Kasus_Semb":0,"Kasus_Meni":1}},{"attributes":{"FID":13,"Kode_Provi":33,"Provinsi":"Jawa Tengah","Kasus_Posi":15,"Kasus_Semb":0,"Kasus_Meni":3}},{"attributes":{"FID":23,"Kode_Provi":64,"Provinsi":"Kalimantan Timur","Kasus_Posi":11,"Kasus_Semb":0,"Kasus_Meni":0}},{"attributes":{"FID":17,"Kode_Provi":51,"Provinsi":"Bali","Kasus_Posi":6,"Kasus_Semb":0,"Kasus_Meni":2}},{"attributes":{"FID":10,"Kode_Provi":21,"Provinsi":"Kepulauan Riau","Kasus_Posi":5,"Kasus_Semb":0,"Kasus_Meni":0}},{"attributes":{"FID":14,"Kode_Provi":34,"Provinsi":"Daerah Istimewa Yogyakarta","Kasus_Posi":5,"Kasus_Semb":1,"Kasus_Meni":0}},{"attributes":{"FID":28,"Kode_Provi":74,"Provinsi":"Sulawesi Tenggara","Kasus_Posi":3,"Kasus_Semb":0,"Kasus_Meni":0}},{"attributes":{"FID":2,"Kode_Provi":12,"Provinsi":"Sumatera Utara","Kasus_Posi":2,"Kasus_Semb":0,"Kasus_Meni":1}},{"attributes":{"FID":20,"Kode_Provi":61,"Provinsi":"Kalimantan Barat","Kasus_Posi":2,"Kasus_Semb":0,"Kasus_Meni":0}},{"attributes":{"FID":21,"Kode_Provi":62,"Provinsi":"Kalimantan Tengah","Kasus_Posi":2,"Kasus_Semb":0,"Kasus_Meni":0}},{"attributes":{"FID":27,"Kode_Provi":73,"Provinsi":"Sulawesi Selatan","Kasus_Posi":2,"Kasus_Semb":0,"Kasus_Meni":1}},{"attributes":{"FID":33,"Kode_Provi":94,"Provinsi":"Papua","Kasus_Posi":2,"Kasus_Semb":0,"Kasus_Meni":0}},{"attributes":{"FID":4,"Kode_Provi":14,"Provinsi":"Riau","Kasus_Posi":1,"Kasus_Semb":0,"Kasus_Meni":0}},{"attributes":{"FID":5,"Kode_Provi":15,"Provinsi":"Jambi","Kasus_Posi":1,"Kasus_Semb":0,"Kasus_Meni":0}},{"attributes":{"FID":9,"Kode_Provi":18,"Provinsi":"Lampung","Kasus_Posi":1,"Kasus_Semb":0,"Kasus_Meni":0}},{"attributes":{"FID":22,"Kode_Provi":63,"Provinsi":"Kalimantan Selatan","Kasus_Posi":1,"Kasus_Semb":0,"Kasus_Meni":0}},{"attributes":{"FID":25,"Kode_Provi":71,"Provinsi":"Sulawesi Utara","Kasus_Posi":1,"Kasus_Semb":0,"Kasus_Meni":0}},{"attributes":{"FID":31,"Kode_Provi":81,"Provinsi":"Maluku","Kasus_Posi":1,"Kasus_Semb":0,"Kasus_Meni":0}},{"attributes":{"FID":32,"Kode_Provi":82,"Provinsi":"Maluku Utara","Kasus_Posi":1,"Kasus_Semb":0,"Kasus_Meni":0}}]
		';
		echo $konten;
	}
	public function global(){
		$konten= '
		[{"attributes":{"OBJECTID":4,"Country_Region":"China","Last_Update":1584973081000,"Lat":30.5928,"Long_":114.30549999999999,"Confirmed":81496,"Deaths":3274,"Recovered":72819,"Active":5403}},
		{"attributes":{"OBJECTID":11,"Country_Region":"Italy","Last_Update":1585001577000,"Lat":41.871899999999997,"Long_":12.567399999999999,"Confirmed":63927,"Deaths":6077,"Recovered":7432,"Active":50418}},
		{"attributes":{"OBJECTID":18,"Country_Region":"US","Last_Update":1585001590000,"Lat":40,"Long_":-100,"Confirmed":43214,"Deaths":533,"Recovered":0,"Active":0}},
		{"attributes":{"OBJECTID":147,"Country_Region":"Spain","Last_Update":1585001577000,"Lat":40.463667000000001,"Long_":-3.7492200000000002,"Confirmed":33089,"Deaths":2207,"Recovered":3355,"Active":27527}},
		{"attributes":{"OBJECTID":8,"Country_Region":"Germany","Last_Update":1585001577000,"Lat":51.165700000000001,"Long_":10.451499999999999,"Confirmed":29056,"Deaths":123,"Recovered":453,"Active":28480}},
		{"attributes":{"OBJECTID":86,"Country_Region":"Iran","Last_Update":1585001577000,"Lat":32.427908000000002,"Long_":53.688046,"Confirmed":23049,"Deaths":1812,"Recovered":8376,"Active":12861}},
		{"attributes":{"OBJECTID":7,"Country_Region":"France","Last_Update":1585001577000,"Lat":46.227600000000002,"Long_":2.2136999999999998,"Confirmed":20123,"Deaths":862,"Recovered":2207,"Active":17054}},
		{"attributes":{"OBJECTID":94,"Country_Region":"Korea, South","Last_Update":1585001577000,"Lat":35.907756999999997,"Long_":127.76692199999999,"Confirmed":8961,"Deaths":111,"Recovered":3166,"Active":5684}},
		{"attributes":{"OBJECTID":16,"Country_Region":"Switzerland","Last_Update":1585001577000,"Lat":46.818199999999997,"Long_":8.2274999999999991,"Confirmed":8547,"Deaths":118,"Recovered":131,"Active":8298}},
		{"attributes":{"OBJECTID":17,"Country_Region":"United Kingdom","Last_Update":1585001577000,"Lat":55,"Long_":-3,"Confirmed":6726,"Deaths":336,"Recovered":140,"Active":6250}},
		{"attributes":{"OBJECTID":12,"Country_Region":"Netherlands","Last_Update":1585001577000,"Lat":52.316699999999997,"Long_":5.5499999999999998,"Confirmed":4764,"Deaths":214,"Recovered":3,"Active":4547}},
		{"attributes":{"OBJECTID":2,"Country_Region":"Austria","Last_Update":1585001577000,"Lat":47.516199999999998,"Long_":14.5501,"Confirmed":4474,"Deaths":21,"Recovered":9,"Active":4444}},
		{"attributes":{"OBJECTID":34,"Country_Region":"Belgium","Last_Update":1585001577000,"Lat":50.833300000000001,"Long_":4.4699359999999997,"Confirmed":3743,"Deaths":88,"Recovered":401,"Active":3254}},
		{"attributes":{"OBJECTID":13,"Country_Region":"Norway","Last_Update":1585001577000,"Lat":60.472000000000001,"Long_":8.4688999999999997,"Confirmed":2621,"Deaths":10,"Recovered":6,"Active":2605}},
		{"attributes":{"OBJECTID":131,"Country_Region":"Portugal","Last_Update":1585001577000,"Lat":39.399900000000002,"Long_":-8.2245000000000008,"Confirmed":2060,"Deaths":23,"Recovered":14,"Active":2023}},
		{"attributes":{"OBJECTID":3,"Country_Region":"Canada","Last_Update":1585001801000,"Lat":60.000999999999998,"Long_":-95.001000000000005,"Confirmed":2046,"Deaths":25,"Recovered":0,"Active":0}},
		{"attributes":{"OBJECTID":15,"Country_Region":"Sweden","Last_Update":1585001577000,"Lat":60.1282,"Long_":18.6435,"Confirmed":2046,"Deaths":25,"Recovered":16,"Active":2005}},
		{"attributes":{"OBJECTID":40,"Country_Region":"Brazil","Last_Update":1585001577000,"Lat":-14.234999999999999,"Long_":-51.9253,"Confirmed":1891,"Deaths":34,"Recovered":2,"Active":1855}},
		{"attributes":{"OBJECTID":1,"Country_Region":"Australia","Last_Update":1585001811000,"Lat":-25,"Long_":133,"Confirmed":1682,"Deaths":7,"Recovered":119,"Active":1556}},
		{"attributes":{"OBJECTID":5,"Country_Region":"Denmark","Last_Update":1585001577000,"Lat":56,"Long_":10,"Confirmed":1572,"Deaths":24,"Recovered":24,"Active":1524}},
		{"attributes":{"OBJECTID":159,"Country_Region":"Turkey","Last_Update":1585001577000,"Lat":38.963700000000003,"Long_":35.243299999999998,"Confirmed":1529,"Deaths":37,"Recovered":0,"Active":1492}},
		{"attributes":{"OBJECTID":104,"Country_Region":"Malaysia","Last_Update":1585001577000,"Lat":4.2104840000000001,"Long_":101.97576599999999,"Confirmed":1518,"Deaths":14,"Recovered":159,"Active":1345}},
		{"attributes":{"OBJECTID":88,"Country_Region":"Israel","Last_Update":1585001577000,"Lat":31.046050999999999,"Long_":34.851612000000003,"Confirmed":1442,"Deaths":1,"Recovered":41,"Active":1400}},
		{"attributes":{"OBJECTID":58,"Country_Region":"Czechia","Last_Update":1585001577000,"Lat":49.817500000000003,"Long_":15.473000000000001,"Confirmed":1236,"Deaths":1,"Recovered":7,"Active":1228}},
		{"attributes":{"OBJECTID":90,"Country_Region":"Japan","Last_Update":1585001577000,"Lat":36.204824000000002,"Long_":138.25292400000001,"Confirmed":1128,"Deaths":42,"Recovered":235,"Active":851}},
		{"attributes":{"OBJECTID":10,"Country_Region":"Ireland","Last_Update":1585001577000,"Lat":53.142400000000002,"Long_":-7.6920999999999999,"Confirmed":1125,"Deaths":6,"Recovered":5,"Active":1114}},
		{"attributes":{"OBJECTID":62,"Country_Region":"Ecuador","Last_Update":1585001577000,"Lat":-1.8311999999999999,"Long_":-78.183400000000006,"Confirmed":981,"Deaths":18,"Recovered":3,"Active":960}},
		{"attributes":{"OBJECTID":102,"Country_Region":"Luxembourg","Last_Update":1585001577000,"Lat":49.815300000000001,"Long_":6.1295999999999999,"Confirmed":875,"Deaths":8,"Recovered":6,"Active":861}},
		{"attributes":{"OBJECTID":124,"Country_Region":"Pakistan","Last_Update":1585001577000,"Lat":30.375299999999999,"Long_":69.345100000000002,"Confirmed":875,"Deaths":6,"Recovered":13,"Active":856}},
		{"attributes":{"OBJECTID":130,"Country_Region":"Poland","Last_Update":1585001577000,"Lat":51.919400000000003,"Long_":19.145099999999999,"Confirmed":749,"Deaths":8,"Recovered":13,"Active":728}},
		{"attributes":{"OBJECTID":49,"Country_Region":"Chile","Last_Update":1585001577000,"Lat":-35.6751,"Long_":-71.543000000000006,"Confirmed":746,"Deaths":2,"Recovered":11,"Active":733}},
		{"attributes":{"OBJECTID":154,"Country_Region":"Thailand","Last_Update":1585001577000,"Lat":15.870032,"Long_":100.992541,"Confirmed":721,"Deaths":1,"Recovered":52,"Active":668}},
		{"attributes":{"OBJECTID":19,"Country_Region":"Cruise Ship","Last_Update":1585001577000,"Lat":0,"Long_":0,"Confirmed":712,"Deaths":8,"Recovered":567,"Active":137}},
		{"attributes":{"OBJECTID":6,"Country_Region":"Finland","Last_Update":1585001577000,"Lat":61.924100000000003,"Long_":25.748200000000001,"Confirmed":700,"Deaths":1,"Recovered":10,"Active":689}},
		{"attributes":{"OBJECTID":75,"Country_Region":"Greece","Last_Update":1585001577000,"Lat":39.074199999999998,"Long_":21.824300000000001,"Confirmed":695,"Deaths":17,"Recovered":29,"Active":649}},
		{"attributes":{"OBJECTID":9,"Country_Region":"Iceland","Last_Update":1585001577000,"Lat":64.963099999999997,"Long_":-19.020800000000001,"Confirmed":588,"Deaths":1,"Recovered":51,"Active":536}},
		{"attributes":{"OBJECTID":85,"Country_Region":"Indonesia","Last_Update":1585001577000,"Lat":-0.7893,"Long_":113.9213,"Confirmed":579,"Deaths":49,"Recovered":30,"Active":500}},
		{"attributes":{"OBJECTID":133,"Country_Region":"Romania","Last_Update":1585001577000,"Lat":45.943199999999997,"Long_":24.966799999999999,"Confirmed":576,"Deaths":7,"Recovered":73,"Active":496}},
		{"attributes":{"OBJECTID":138,"Country_Region":"Saudi Arabia","Last_Update":1585001577000,"Lat":23.885942,"Long_":45.079161999999997,"Confirmed":562,"Deaths":0,"Recovered":19,"Active":543}},
		{"attributes":{"OBJECTID":142,"Country_Region":"Singapore","Last_Update":1585001577000,"Lat":1.2833000000000001,"Long_":103.83329999999999,"Confirmed":509,"Deaths":2,"Recovered":152,"Active":355}},
		{"attributes":{"OBJECTID":132,"Country_Region":"Qatar","Last_Update":1585001577000,"Lat":25.354800000000001,"Long_":51.183900000000001,"Confirmed":501,"Deaths":0,"Recovered":33,"Active":468}},
		{"attributes":{"OBJECTID":84,"Country_Region":"India","Last_Update":1585001577000,"Lat":20.593684,"Long_":78.962879999999998,"Confirmed":499,"Deaths":10,"Recovered":34,"Active":455}},
		{"attributes":{"OBJECTID":129,"Country_Region":"Philippines","Last_Update":1585001577000,"Lat":12.879721,"Long_":121.774017,"Confirmed":462,"Deaths":33,"Recovered":18,"Active":411}},
		{"attributes":{"OBJECTID":144,"Country_Region":"Slovenia","Last_Update":1585001577000,"Lat":46.151200000000003,"Long_":14.9955,"Confirmed":442,"Deaths":3,"Recovered":0,"Active":439}},
		{"attributes":{"OBJECTID":14,"Country_Region":"Russia","Last_Update":1585001577000,"Lat":61.524000000000001,"Long_":105.3188,"Confirmed":438,"Deaths":1,"Recovered":17,"Active":420}},
		{"attributes":{"OBJECTID":146,"Country_Region":"South Africa","Last_Update":1585001577000,"Lat":-30.5595,"Long_":22.9375,"Confirmed":402,"Deaths":0,"Recovered":4,"Active":398}},
		{"attributes":{"OBJECTID":128,"Country_Region":"Peru","Last_Update":1585001577000,"Lat":-9.1899999999999995,"Long_":-75.015199999999993,"Confirmed":395,"Deaths":5,"Recovered":1,"Active":389}},
		{"attributes":{"OBJECTID":30,"Country_Region":"Bahrain","Last_Update":1585001577000,"Lat":26.0275,"Long_":50.549999999999997,"Confirmed":377,"Deaths":2,"Recovered":164,"Active":211}},
		{"attributes":{"OBJECTID":63,"Country_Region":"Egypt","Last_Update":1585001577000,"Lat":26.820553,"Long_":30.802498,"Confirmed":366,"Deaths":19,"Recovered":68,"Active":279}},
		{"attributes":{"OBJECTID":67,"Country_Region":"Estonia","Last_Update":1585001577000,"Lat":58.595300000000002,"Long_":25.0136,"Confirmed":352,"Deaths":0,"Recovered":4,"Active":348}},
		{"attributes":{"OBJECTID":109,"Country_Region":"Mexico","Last_Update":1585001577000,"Lat":23.634499999999999,"Long_":-102.5528,"Confirmed":316,"Deaths":2,"Recovered":4,"Active":310}},
		{"attributes":{"OBJECTID":55,"Country_Region":"Croatia","Last_Update":1585001577000,"Lat":45.100000000000001,"Long_":15.199999999999999,"Confirmed":315,"Deaths":1,"Recovered":5,"Active":309}},
		{"attributes":{"OBJECTID":125,"Country_Region":"Panama","Last_Update":1585001577000,"Lat":8.5380000000000003,"Long_":-80.7821,"Confirmed":313,"Deaths":3,"Recovered":1,"Active":309}},
		{"attributes":{"OBJECTID":50,"Country_Region":"Colombia","Last_Update":1585001577000,"Lat":4.5709,"Long_":-74.297300000000007,"Confirmed":277,"Deaths":3,"Recovered":3,"Active":271}},
		{"attributes":{"OBJECTID":98,"Country_Region":"Lebanon","Last_Update":1585001577000,"Lat":33.854700000000001,"Long_":35.862299999999998,"Confirmed":267,"Deaths":4,"Recovered":8,"Active":255}},
		{"attributes":{"OBJECTID":26,"Country_Region":"Argentina","Last_Update":1585001577000,"Lat":-38.4161,"Long_":-63.616700000000002,"Confirmed":266,"Deaths":4,"Recovered":27,"Active":235}},
		{"attributes":{"OBJECTID":87,"Country_Region":"Iraq","Last_Update":1585001577000,"Lat":33.223191,"Long_":43.679290999999999,"Confirmed":266,"Deaths":23,"Recovered":62,"Active":181}},
		{"attributes":{"OBJECTID":140,"Country_Region":"Serbia","Last_Update":1585001577000,"Lat":44.016500000000001,"Long_":21.0059,"Confirmed":249,"Deaths":3,"Recovered":3,"Active":243}},
		{"attributes":{"OBJECTID":61,"Country_Region":"Dominican Republic","Last_Update":1585001577000,"Lat":18.735700000000001,"Long_":-70.162700000000001,"Confirmed":245,"Deaths":3,"Recovered":3,"Active":239}},
		{"attributes":{"OBJECTID":27,"Country_Region":"Armenia","Last_Update":1585001577000,"Lat":40.069099999999999,"Long_":45.038200000000003,"Confirmed":235,"Deaths":0,"Recovered":2,"Active":233}},
		{"attributes":{"OBJECTID":22,"Country_Region":"Algeria","Last_Update":1585001577000,"Lat":28.033899999999999,"Long_":1.6596,"Confirmed":230,"Deaths":17,"Recovered":65,"Active":148}},
		{"attributes":{"OBJECTID":42,"Country_Region":"Bulgaria","Last_Update":1585001577000,"Lat":42.733899999999998,"Long_":25.485800000000001,"Confirmed":201,"Deaths":3,"Recovered":3,"Active":195}},
		{"attributes":{"OBJECTID":162,"Country_Region":"United Arab Emirates","Last_Update":1585001577000,"Lat":23.424075999999999,"Long_":53.847817999999997,"Confirmed":198,"Deaths":2,"Recovered":41,"Active":155}},
		{"attributes":{"OBJECTID":152,"Country_Region":"Taiwan*","Last_Update":1584945913000,"Lat":23.699999999999999,"Long_":121,"Confirmed":195,"Deaths":2,"Recovered":28,"Active":165}},
		{"attributes":{"OBJECTID":95,"Country_Region":"Kuwait","Last_Update":1585001577000,"Lat":29.31166,"Long_":47.481766,"Confirmed":189,"Deaths":0,"Recovered":30,"Active":159}},
		{"attributes":{"OBJECTID":137,"Country_Region":"San Marino","Last_Update":1585001577000,"Lat":43.942399999999999,"Long_":12.457800000000001,"Confirmed":187,"Deaths":20,"Recovered":4,"Active":163}},
		{"attributes":{"OBJECTID":143,"Country_Region":"Slovakia","Last_Update":1585001577000,"Lat":48.668999999999997,"Long_":19.699000000000002,"Confirmed":186,"Deaths":0,"Recovered":7,"Active":179}},
		{"attributes":{"OBJECTID":97,"Country_Region":"Latvia","Last_Update":1585001577000,"Lat":56.879600000000003,"Long_":24.603200000000001,"Confirmed":180,"Deaths":0,"Recovered":1,"Active":179}},
		{"attributes":{"OBJECTID":101,"Country_Region":"Lithuania","Last_Update":1585001577000,"Lat":55.169400000000003,"Long_":23.8813,"Confirmed":179,"Deaths":1,"Recovered":1,"Active":177}},
		{"attributes":{"OBJECTID":83,"Country_Region":"Hungary","Last_Update":1585001577000,"Lat":47.162500000000001,"Long_":19.503299999999999,"Confirmed":167,"Deaths":7,"Recovered":16,"Active":144}},
		{"attributes":{"OBJECTID":53,"Country_Region":"Costa Rica","Last_Update":1585001577000,"Lat":9.7489000000000008,"Long_":-83.753399999999999,"Confirmed":158,"Deaths":2,"Recovered":2,"Active":154}},
		{"attributes":{"OBJECTID":163,"Country_Region":"Uruguay","Last_Update":1585001577000,"Lat":-32.522799999999997,"Long_":-55.765799999999999,"Confirmed":158,"Deaths":0,"Recovered":0,"Active":158}},
		{"attributes":{"OBJECTID":114,"Country_Region":"Morocco","Last_Update":1585001577000,"Lat":31.791699999999999,"Long_":-7.0926,"Confirmed":143,"Deaths":4,"Recovered":5,"Active":134}},
		{"attributes":{"OBJECTID":122,"Country_Region":"North Macedonia","Last_Update":1585001577000,"Lat":41.608600000000003,"Long_":21.7453,"Confirmed":136,"Deaths":2,"Recovered":1,"Active":133}},
		{"attributes":{"OBJECTID":23,"Country_Region":"Andorra","Last_Update":1585001577000,"Lat":42.506300000000003,"Long_":1.5218,"Confirmed":133,"Deaths":1,"Recovered":1,"Active":131}},
		{"attributes":{"OBJECTID":39,"Country_Region":"Bosnia and Herzegovina","Last_Update":1585001577000,"Lat":43.915900000000001,"Long_":17.679099999999998,"Confirmed":132,"Deaths":1,"Recovered":2,"Active":129}},
		{"attributes":{"OBJECTID":91,"Country_Region":"Jordan","Last_Update":1585001577000,"Lat":31.239999999999998,"Long_":36.509999999999998,"Confirmed":127,"Deaths":0,"Recovered":1,"Active":126}},
		{"attributes":{"OBJECTID":166,"Country_Region":"Vietnam","Last_Update":1585001577000,"Lat":14.058324000000001,"Long_":108.277199,"Confirmed":123,"Deaths":0,"Recovered":17,"Active":106}},
		{"attributes":{"OBJECTID":57,"Country_Region":"Cyprus","Last_Update":1585001577000,"Lat":35.126399999999997,"Long_":33.429900000000004,"Confirmed":116,"Deaths":1,"Recovered":3,"Active":112}},
		{"attributes":{"OBJECTID":110,"Country_Region":"Moldova","Last_Update":1585001577000,"Lat":47.4116,"Long_":28.369900000000001,"Confirmed":109,"Deaths":1,"Recovered":2,"Active":106}},
		{"attributes":{"OBJECTID":106,"Country_Region":"Malta","Last_Update":1585001577000,"Lat":35.9375,"Long_":14.375400000000001,"Confirmed":107,"Deaths":0,"Recovered":2,"Active":105}},
		{"attributes":{"OBJECTID":21,"Country_Region":"Albania","Last_Update":1585001577000,"Lat":41.153300000000002,"Long_":20.168299999999999,"Confirmed":104,"Deaths":4,"Recovered":2,"Active":98}},
		{"attributes":{"OBJECTID":118,"Country_Region":"New Zealand","Last_Update":1585001577000,"Lat":-40.900599999999997,"Long_":174.886,"Confirmed":102,"Deaths":0,"Recovered":0,"Active":102}},
		{"attributes":{"OBJECTID":43,"Country_Region":"Burkina Faso","Last_Update":1585001577000,"Lat":12.238300000000001,"Long_":-1.5616000000000001,"Confirmed":99,"Deaths":4,"Recovered":5,"Active":90}},
		{"attributes":{"OBJECTID":148,"Country_Region":"Sri Lanka","Last_Update":1585001577000,"Lat":7.8730539999999998,"Long_":80.771797000000007,"Confirmed":97,"Deaths":0,"Recovered":2,"Active":95}},
		{"attributes":{"OBJECTID":41,"Country_Region":"Brunei","Last_Update":1585001577000,"Lat":4.5353000000000003,"Long_":114.7277,"Confirmed":91,"Deaths":0,"Recovered":2,"Active":89}},
		{"attributes":{"OBJECTID":158,"Country_Region":"Tunisia","Last_Update":1585001577000,"Lat":33.886916999999997,"Long_":9.5374990000000004,"Confirmed":89,"Deaths":3,"Recovered":1,"Active":85}},
		{"attributes":{"OBJECTID":45,"Country_Region":"Cambodia","Last_Update":1585001577000,"Lat":11.550000000000001,"Long_":104.91670000000001,"Confirmed":87,"Deaths":0,"Recovered":2,"Active":85}},
		{"attributes":{"OBJECTID":33,"Country_Region":"Belarus","Last_Update":1585001577000,"Lat":53.709800000000001,"Long_":27.953399999999998,"Confirmed":81,"Deaths":0,"Recovered":22,"Active":59}},
		{"attributes":{"OBJECTID":139,"Country_Region":"Senegal","Last_Update":1585001577000,"Lat":14.497400000000001,"Long_":-14.452400000000001,"Confirmed":79,"Deaths":0,"Recovered":8,"Active":71}},
		{"attributes":{"OBJECTID":165,"Country_Region":"Venezuela","Last_Update":1585001577000,"Lat":6.4238,"Long_":-66.589699999999993,"Confirmed":77,"Deaths":0,"Recovered":15,"Active":62}},
		{"attributes":{"OBJECTID":161,"Country_Region":"Ukraine","Last_Update":1585001577000,"Lat":48.379399999999997,"Long_":31.165600000000001,"Confirmed":73,"Deaths":3,"Recovered":1,"Active":69}},
		{"attributes":{"OBJECTID":28,"Country_Region":"Azerbaijan","Last_Update":1585001577000,"Lat":40.143099999999997,"Long_":47.576900000000002,"Confirmed":72,"Deaths":1,"Recovered":10,"Active":61}},
		{"attributes":{"OBJECTID":123,"Country_Region":"Oman","Last_Update":1585001577000,"Lat":21.512582999999999,"Long_":55.923254999999997,"Confirmed":66,"Deaths":0,"Recovered":17,"Active":49}},
		{"attributes":{"OBJECTID":92,"Country_Region":"Kazakhstan","Last_Update":1585001577000,"Lat":48.019599999999997,"Long_":66.923699999999997,"Confirmed":62,"Deaths":0,"Recovered":0,"Active":62}},
		{"attributes":{"OBJECTID":73,"Country_Region":"Georgia","Last_Update":1585001577000,"Lat":42.315399999999997,"Long_":43.356900000000003,"Confirmed":61,"Deaths":0,"Recovered":8,"Active":53}},
		{"attributes":{"OBJECTID":46,"Country_Region":"Cameroon","Last_Update":1585001577000,"Lat":3.8479999999999999,"Long_":11.5021,"Confirmed":56,"Deaths":0,"Recovered":2,"Active":54}},
		{"attributes":{"OBJECTID":100,"Country_Region":"Liechtenstein","Last_Update":1585001577000,"Lat":47.140000000000001,"Long_":9.5500000000000007,"Confirmed":51,"Deaths":0,"Recovered":0,"Active":51}},
		{"attributes":{"OBJECTID":157,"Country_Region":"Trinidad and Tobago","Last_Update":1585001577000,"Lat":10.691800000000001,"Long_":-61.222499999999997,"Confirmed":51,"Deaths":0,"Recovered":0,"Active":51}},
		{"attributes":{"OBJECTID":164,"Country_Region":"Uzbekistan","Last_Update":1585001577000,"Lat":41.377490999999999,"Long_":64.585262,"Confirmed":46,"Deaths":0,"Recovered":0,"Active":46}},
		{"attributes":{"OBJECTID":20,"Country_Region":"Afghanistan","Last_Update":1585001577000,"Lat":33.939109999999999,"Long_":67.709952999999999,"Confirmed":40,"Deaths":1,"Recovered":1,"Active":38}},
		{"attributes":{"OBJECTID":56,"Country_Region":"Cuba","Last_Update":1585001577000,"Lat":21.521757000000001,"Long_":-77.781166999999996,"Confirmed":40,"Deaths":1,"Recovered":0,"Active":39}},
		{"attributes":{"OBJECTID":52,"Country_Region":"Congo (Kinshasa)","Last_Update":1585001577000,"Lat":-4.3224470000000004,"Long_":15.307045,"Confirmed":36,"Deaths":1,"Recovered":0,"Active":35}},
		{"attributes":{"OBJECTID":108,"Country_Region":"Mauritius","Last_Update":1585001577000,"Lat":-20.348403999999999,"Long_":57.552152,"Confirmed":36,"Deaths":2,"Recovered":0,"Active":34}},
		{"attributes":{"OBJECTID":121,"Country_Region":"Nigeria","Last_Update":1585001577000,"Lat":9.0820000000000007,"Long_":8.6753,"Confirmed":36,"Deaths":1,"Recovered":2,"Active":33}},
		{"attributes":{"OBJECTID":134,"Country_Region":"Rwanda","Last_Update":1585001577000,"Lat":-1.9402999999999999,"Long_":29.873899999999999,"Confirmed":36,"Deaths":0,"Recovered":0,"Active":36}},
		{"attributes":{"OBJECTID":31,"Country_Region":"Bangladesh","Last_Update":1585001577000,"Lat":23.684999999999999,"Long_":90.356300000000005,"Confirmed":33,"Deaths":3,"Recovered":5,"Active":25}},
		{"attributes":{"OBJECTID":38,"Country_Region":"Bolivia","Last_Update":1585001577000,"Lat":-16.290199999999999,"Long_":-63.588700000000003,"Confirmed":27,"Deaths":0,"Recovered":0,"Active":27}},
		{"attributes":{"OBJECTID":74,"Country_Region":"Ghana","Last_Update":1585001577000,"Lat":7.9465000000000003,"Long_":-1.0232000000000001,"Confirmed":27,"Deaths":2,"Recovered":0,"Active":25}},
		{"attributes":{"OBJECTID":82,"Country_Region":"Honduras","Last_Update":1585001577000,"Lat":15.199999999999999,"Long_":-86.241900000000001,"Confirmed":27,"Deaths":0,"Recovered":0,"Active":27}},
		{"attributes":{"OBJECTID":113,"Country_Region":"Montenegro","Last_Update":1585001577000,"Lat":42.708677999999999,"Long_":19.374389999999998,"Confirmed":27,"Deaths":1,"Recovered":0,"Active":26}},
		{"attributes":{"OBJECTID":54,"Country_Region":"Cote dIvoire","Last_Update":1585001577000,"Lat":7.54,"Long_":-5.5471000000000004,"Confirmed":25,"Deaths":0,"Recovered":2,"Active":23}},
		{"attributes":{"OBJECTID":111,"Country_Region":"Monaco","Last_Update":1585001577000,"Lat":43.7333,"Long_":7.4166999999999996,"Confirmed":23,"Deaths":0,"Recovered":1,"Active":22}},
		{"attributes":{"OBJECTID":127,"Country_Region":"Paraguay","Last_Update":1585001577000,"Lat":-23.442499999999999,"Long_":-58.443800000000003,"Confirmed":22,"Deaths":1,"Recovered":0,"Active":21}},
		{"attributes":{"OBJECTID":77,"Country_Region":"Guatemala","Last_Update":1585001577000,"Lat":15.7835,"Long_":-90.230800000000002,"Confirmed":20,"Deaths":1,"Recovered":0,"Active":19}},
		{"attributes":{"OBJECTID":79,"Country_Region":"Guyana","Last_Update":1585001577000,"Lat":4.8604159999999998,"Long_":-58.93018,"Confirmed":20,"Deaths":1,"Recovered":0,"Active":19}},
		{"attributes":{"OBJECTID":89,"Country_Region":"Jamaica","Last_Update":1585001577000,"Lat":18.1096,"Long_":-77.297499999999999,"Confirmed":19,"Deaths":1,"Recovered":2,"Active":16}},
		{"attributes":{"OBJECTID":156,"Country_Region":"Togo","Last_Update":1585001577000,"Lat":8.6195000000000004,"Long_":0.82479999999999998,"Confirmed":18,"Deaths":0,"Recovered":0,"Active":18}},
		{"attributes":{"OBJECTID":32,"Country_Region":"Barbados","Last_Update":1585001577000,"Lat":13.193899999999999,"Long_":-59.543199999999999,"Confirmed":17,"Deaths":0,"Recovered":0,"Active":17}},
		{"attributes":{"OBJECTID":93,"Country_Region":"Kenya","Last_Update":1585001577000,"Lat":-0.023599999999999999,"Long_":37.906199999999998,"Confirmed":16,"Deaths":0,"Recovered":0,"Active":16}},
		{"attributes":{"OBJECTID":96,"Country_Region":"Kyrgyzstan","Last_Update":1585001577000,"Lat":41.20438,"Long_":74.766098,"Confirmed":16,"Deaths":0,"Recovered":0,"Active":16}},
		{"attributes":{"OBJECTID":105,"Country_Region":"Maldives","Last_Update":1585001577000,"Lat":3.2027999999999999,"Long_":73.220699999999994,"Confirmed":13,"Deaths":0,"Recovered":5,"Active":8}},
		{"attributes":{"OBJECTID":103,"Country_Region":"Madagascar","Last_Update":1585001577000,"Lat":-18.766946999999998,"Long_":46.869107,"Confirmed":12,"Deaths":0,"Recovered":0,"Active":12}},
		{"attributes":{"OBJECTID":153,"Country_Region":"Tanzania","Last_Update":1585001577000,"Lat":-6.3690280000000001,"Long_":34.888821999999998,"Confirmed":12,"Deaths":0,"Recovered":0,"Active":12}},
		{"attributes":{"OBJECTID":69,"Country_Region":"Ethiopia","Last_Update":1585001577000,"Lat":9.1449999999999996,"Long_":40.489699999999999,"Confirmed":11,"Deaths":0,"Recovered":0,"Active":11}},
		{"attributes":{"OBJECTID":112,"Country_Region":"Mongolia","Last_Update":1585001577000,"Lat":46.862499999999997,"Long_":103.8467,"Confirmed":10,"Deaths":0,"Recovered":0,"Active":10}},
		{"attributes":{"OBJECTID":65,"Country_Region":"Equatorial Guinea","Last_Update":1585001577000,"Lat":1.6508,"Long_":10.267899999999999,"Confirmed":9,"Deaths":0,"Recovered":0,"Active":9}},
		{"attributes":{"OBJECTID":160,"Country_Region":"Uganda","Last_Update":1585001577000,"Lat":1.3733329999999999,"Long_":32.290275000000001,"Confirmed":9,"Deaths":0,"Recovered":0,"Active":9}},
		{"attributes":{"OBJECTID":141,"Country_Region":"Seychelles","Last_Update":1585001577000,"Lat":-4.6795999999999998,"Long_":55.491999999999997,"Confirmed":7,"Deaths":0,"Recovered":0,"Active":7}},
		{"attributes":{"OBJECTID":80,"Country_Region":"Haiti","Last_Update":1585001577000,"Lat":18.9712,"Long_":-72.285200000000003,"Confirmed":6,"Deaths":0,"Recovered":0,"Active":6}},
		{"attributes":{"OBJECTID":36,"Country_Region":"Benin","Last_Update":1585001577000,"Lat":9.3077000000000005,"Long_":2.3157999999999999,"Confirmed":5,"Deaths":0,"Recovered":0,"Active":5}},
		{"attributes":{"OBJECTID":71,"Country_Region":"Gabon","Last_Update":1585001577000,"Lat":-0.80369999999999997,"Long_":11.609400000000001,"Confirmed":5,"Deaths":1,"Recovered":0,"Active":4}},
		{"attributes":{"OBJECTID":150,"Country_Region":"Suriname","Last_Update":1585001577000,"Lat":3.9192999999999998,"Long_":-56.027799999999999,"Confirmed":5,"Deaths":0,"Recovered":0,"Active":5}},
		{"attributes":{"OBJECTID":29,"Country_Region":"Bahamas","Last_Update":1585001577000,"Lat":25.025884999999999,"Long_":-78.035888999999997,"Confirmed":4,"Deaths":0,"Recovered":0,"Active":4}},
		{"attributes":{"OBJECTID":51,"Country_Region":"Congo (Brazzaville)","Last_Update":1585001577000,"Lat":-4.2633999999999999,"Long_":15.283200000000001,"Confirmed":4,"Deaths":0,"Recovered":0,"Active":4}},
		{"attributes":{"OBJECTID":68,"Country_Region":"Eswatini","Last_Update":1585001577000,"Lat":-26.522500000000001,"Long_":31.465900000000001,"Confirmed":4,"Deaths":0,"Recovered":0,"Active":4}},
		{"attributes":{"OBJECTID":78,"Country_Region":"Guinea","Last_Update":1585001577000,"Lat":9.9456000000000007,"Long_":-9.6966000000000001,"Confirmed":4,"Deaths":0,"Recovered":0,"Active":4}},
		{"attributes":{"OBJECTID":116,"Country_Region":"Namibia","Last_Update":1585001577000,"Lat":-22.957599999999999,"Long_":18.490400000000001,"Confirmed":4,"Deaths":0,"Recovered":0,"Active":4}},
		{"attributes":{"OBJECTID":24,"Country_Region":"Angola","Last_Update":1585001577000,"Lat":-11.2027,"Long_":17.873899999999999,"Confirmed":3,"Deaths":0,"Recovered":0,"Active":3}},
		{"attributes":{"OBJECTID":25,"Country_Region":"Antigua and Barbuda","Last_Update":1585001577000,"Lat":17.0608,"Long_":-61.796399999999998,"Confirmed":3,"Deaths":0,"Recovered":0,"Active":3}},
		{"attributes":{"OBJECTID":44,"Country_Region":"Cabo Verde","Last_Update":1585001577000,"Lat":16.538799999999998,"Long_":-23.041799999999999,"Confirmed":3,"Deaths":0,"Recovered":0,"Active":3}},
		{"attributes":{"OBJECTID":47,"Country_Region":"Central African Republic","Last_Update":1585001577000,"Lat":6.6111000000000004,"Long_":20.939399999999999,"Confirmed":3,"Deaths":0,"Recovered":0,"Active":3}},
		{"attributes":{"OBJECTID":59,"Country_Region":"Djibouti","Last_Update":1585001577000,"Lat":11.825100000000001,"Long_":42.590299999999999,"Confirmed":3,"Deaths":0,"Recovered":0,"Active":3}},
		{"attributes":{"OBJECTID":64,"Country_Region":"El Salvador","Last_Update":1585001577000,"Lat":13.7942,"Long_":-88.896500000000003,"Confirmed":3,"Deaths":0,"Recovered":0,"Active":3}},
		{"attributes":{"OBJECTID":70,"Country_Region":"Fiji","Last_Update":1585001577000,"Lat":-17.7134,"Long_":178.065,"Confirmed":3,"Deaths":0,"Recovered":0,"Active":3}},
		{"attributes":{"OBJECTID":99,"Country_Region":"Liberia","Last_Update":1585001577000,"Lat":6.4280549999999996,"Long_":-9.4294989999999999,"Confirmed":3,"Deaths":0,"Recovered":0,"Active":3}},
		{"attributes":{"OBJECTID":135,"Country_Region":"Saint Lucia","Last_Update":1585001577000,"Lat":13.9094,"Long_":-60.978900000000003,"Confirmed":3,"Deaths":0,"Recovered":0,"Active":3}},
		{"attributes":{"OBJECTID":167,"Country_Region":"Zambia","Last_Update":1585001577000,"Lat":-13.133896999999999,"Long_":27.849332,"Confirmed":3,"Deaths":0,"Recovered":0,"Active":3}},
		{"attributes":{"OBJECTID":168,"Country_Region":"Zimbabwe","Last_Update":1585001577000,"Lat":-19.015438,"Long_":29.154857,"Confirmed":3,"Deaths":1,"Recovered":0,"Active":2}},
		{"attributes":{"OBJECTID":37,"Country_Region":"Bhutan","Last_Update":1585001577000,"Lat":27.514199999999999,"Long_":90.433599999999998,"Confirmed":2,"Deaths":0,"Recovered":0,"Active":2}},
		{"attributes":{"OBJECTID":72,"Country_Region":"Gambia","Last_Update":1585001577000,"Lat":13.443199999999999,"Long_":-15.3101,"Confirmed":2,"Deaths":1,"Recovered":0,"Active":1}},
		{"attributes":{"OBJECTID":107,"Country_Region":"Mauritania","Last_Update":1585001577000,"Lat":21.007899999999999,"Long_":10.940799999999999,"Confirmed":2,"Deaths":0,"Recovered":0,"Active":2}},
		{"attributes":{"OBJECTID":117,"Country_Region":"Nepal","Last_Update":1585001577000,"Lat":28.166699999999999,"Long_":84.25,"Confirmed":2,"Deaths":0,"Recovered":1,"Active":1}},
		{"attributes":{"OBJECTID":119,"Country_Region":"Nicaragua","Last_Update":1585001577000,"Lat":12.865416,"Long_":-85.207228999999998,"Confirmed":2,"Deaths":0,"Recovered":0,"Active":2}},
		{"attributes":{"OBJECTID":120,"Country_Region":"Niger","Last_Update":1585001577000,"Lat":17.607789,"Long_":8.0816660000000002,"Confirmed":2,"Deaths":0,"Recovered":0,"Active":2}},
		{"attributes":{"OBJECTID":149,"Country_Region":"Sudan","Last_Update":1585001577000,"Lat":12.8628,"Long_":30.217600000000001,"Confirmed":2,"Deaths":1,"Recovered":0,"Active":1}},
		{"attributes":{"OBJECTID":35,"Country_Region":"Belize","Last_Update":1585001577000,"Lat":13.193899999999999,"Long_":-59.543199999999999,"Confirmed":1,"Deaths":0,"Recovered":0,"Active":1}},
		{"attributes":{"OBJECTID":48,"Country_Region":"Chad","Last_Update":1585001577000,"Lat":15.4542,"Long_":18.732199999999999,"Confirmed":1,"Deaths":0,"Recovered":0,"Active":1}},
		{"attributes":{"OBJECTID":60,"Country_Region":"Dominica","Last_Update":1585001577000,"Lat":15.414999999999999,"Long_":-61.371000000000002,"Confirmed":1,"Deaths":0,"Recovered":0,"Active":1}},
		{"attributes":{"OBJECTID":66,"Country_Region":"Eritrea","Last_Update":1585001577000,"Lat":15.179399999999999,"Long_":39.782299999999999,"Confirmed":1,"Deaths":0,"Recovered":0,"Active":1}},
		{"attributes":{"OBJECTID":76,"Country_Region":"Grenada","Last_Update":1585001577000,"Lat":12.1165,"Long_":-61.679000000000002,"Confirmed":1,"Deaths":0,"Recovered":0,"Active":1}},
		{"attributes":{"OBJECTID":81,"Country_Region":"Holy See","Last_Update":1585001577000,"Lat":41.902900000000002,"Long_":12.4534,"Confirmed":1,"Deaths":0,"Recovered":0,"Active":1}},
		{"attributes":{"OBJECTID":115,"Country_Region":"Mozambique","Last_Update":1585001577000,"Lat":-18.665694999999999,"Long_":35.529561999999999,"Confirmed":1,"Deaths":0,"Recovered":0,"Active":1}},
		{"attributes":{"OBJECTID":126,"Country_Region":"Papua New Guinea","Last_Update":1585001577000,"Lat":-6.3149930000000003,"Long_":143.95554999999999,"Confirmed":1,"Deaths":0,"Recovered":0,"Active":1}},
		{"attributes":{"OBJECTID":136,"Country_Region":"Saint Vincent and the Grenadines","Last_Update":1585001577000,"Lat":12.984299999999999,"Long_":-61.287199999999999,"Confirmed":1,"Deaths":0,"Recovered":0,"Active":1}},
		{"attributes":{"OBJECTID":145,"Country_Region":"Somalia","Last_Update":1585001577000,"Lat":5.1521489999999996,"Long_":46.199615999999999,"Confirmed":1,"Deaths":0,"Recovered":0,"Active":1}},
		{"attributes":{"OBJECTID":151,"Country_Region":"Syria","Last_Update":1585001577000,"Lat":34.802075000000002,"Long_":38.996814999999998,"Confirmed":1,"Deaths":0,"Recovered":0,"Active":1}},
		{"attributes":{"OBJECTID":155,"Country_Region":"Timor-Leste","Last_Update":1585001577000,"Lat":-8.8742169999999998,"Long_":125.72753899999999,"Confirmed":1,"Deaths":0,"Recovered":0,"Active":1}}]
		';
		echo $konten;
	}
}