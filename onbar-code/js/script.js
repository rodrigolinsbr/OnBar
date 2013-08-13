window.onload=function(){
var botoes={
	
	visualizacao: function(){
		var cont=0;
var aba = [2,0,0,0,1];
$('.voltar').hide();
$('.passar').click(function() { 
cont++;
var array= aba[cont];
if(array==1){
   $('.passar').hide();
}
else{
   $('.passar').show();
   $('.voltar').show();
}

  });
$('.voltar').click(function() { 
cont--;
var array= aba[cont];
if(array==2){
   $('.voltar').hide();
}
else{
   $('.voltar').show();
   $('.passar').show();
}

  });
	}
}

botoes.visualizacao();
    function init() {

      var canvas = document.getElementById("canvas");
      var ctx = canvas.getContext("2d");

      draw(ctx);
    }

    function draw(ctx) {

      // layer1/Group
      ctx.save();

      // layer1/Group/Compound Path
      ctx.save();
      ctx.beginPath();

      // layer1/Group/Compound Path/Path
      ctx.moveTo(271.6, 272.5);
      ctx.bezierCurveTo(271.0, 270.8, 270.4, 270.1, 269.1, 268.8);
      ctx.bezierCurveTo(267.6, 267.4, 265.0, 267.9, 263.1, 267.8);
      ctx.bezierCurveTo(259.5, 267.6, 256.0, 266.8, 252.9, 264.9);
      ctx.bezierCurveTo(250.0, 263.0, 247.6, 260.4, 244.6, 258.6);
      ctx.bezierCurveTo(241.2, 256.5, 240.4, 254.2, 239.6, 250.3);
      ctx.bezierCurveTo(243.5, 249.9, 247.4, 249.6, 251.2, 249.0);
      ctx.bezierCurveTo(253.2, 248.7, 261.0, 248.5, 260.9, 246.5);
      ctx.bezierCurveTo(260.1, 237.5, 259.5, 228.5, 258.6, 219.5);
      ctx.bezierCurveTo(257.8, 211.7, 257.0, 203.7, 255.5, 196.0);
      ctx.bezierCurveTo(255.0, 193.5, 254.5, 190.9, 254.0, 188.4);
      ctx.bezierCurveTo(253.6, 186.4, 252.4, 185.3, 251.1, 183.7);
      ctx.bezierCurveTo(248.6, 180.6, 244.0, 179.5, 240.3, 178.4);
      ctx.bezierCurveTo(238.2, 177.8, 235.7, 178.0, 233.5, 177.9);
      ctx.bezierCurveTo(234.3, 177.9, 235.1, 178.0, 235.9, 178.0);
      ctx.bezierCurveTo(235.8, 176.2, 235.3, 174.7, 234.5, 173.0);
      ctx.bezierCurveTo(234.0, 171.7, 234.8, 168.7, 234.9, 167.3);
      ctx.bezierCurveTo(235.2, 163.4, 235.2, 159.7, 235.1, 155.8);
      ctx.bezierCurveTo(235.0, 151.7, 234.8, 147.6, 234.9, 143.5);
      ctx.bezierCurveTo(234.9, 142.7, 235.0, 141.9, 235.0, 141.0);
      ctx.bezierCurveTo(235.1, 140.1, 233.9, 139.5, 233.9, 138.8);
      ctx.bezierCurveTo(233.9, 137.6, 236.7, 135.3, 235.7, 134.5);
      ctx.bezierCurveTo(236.8, 133.1, 237.9, 131.7, 239.0, 130.2);
      ctx.bezierCurveTo(238.7, 130.6, 238.4, 131.0, 238.2, 131.3);
      ctx.bezierCurveTo(241.8, 129.1, 242.4, 125.2, 242.8, 121.1);
      ctx.bezierCurveTo(243.0, 118.4, 243.2, 118.2, 246.0, 118.4);
      ctx.bezierCurveTo(248.2, 118.5, 248.1, 117.9, 248.2, 115.8);
      ctx.bezierCurveTo(248.5, 107.3, 248.7, 99.1, 248.4, 90.7);
      ctx.bezierCurveTo(248.2, 86.1, 248.0, 81.4, 247.8, 76.8);
      ctx.bezierCurveTo(247.7, 73.4, 245.5, 69.5, 244.1, 66.5);
      ctx.bezierCurveTo(240.7, 59.2, 237.0, 52.1, 232.3, 45.6);
      ctx.bezierCurveTo(230.9, 43.6, 229.4, 41.7, 228.0, 39.7);
      ctx.bezierCurveTo(227.1, 38.4, 225.5, 37.6, 224.7, 36.4);
      ctx.bezierCurveTo(224.3, 35.8, 224.4, 34.8, 224.0, 34.1);
      ctx.bezierCurveTo(223.5, 33.3, 222.6, 32.5, 222.0, 31.8);
      ctx.bezierCurveTo(220.9, 30.5, 219.3, 30.9, 217.7, 31.0);
      ctx.bezierCurveTo(215.5, 31.1, 214.0, 31.1, 212.0, 32.0);
      ctx.bezierCurveTo(210.7, 32.5, 208.9, 31.8, 207.5, 31.5);
      ctx.bezierCurveTo(204.0, 30.9, 200.4, 29.8, 197.1, 30.6);
      ctx.bezierCurveTo(197.4, 31.4, 197.8, 32.3, 198.2, 33.1);
      ctx.bezierCurveTo(197.0, 30.6, 195.9, 29.4, 193.3, 28.3);
      ctx.bezierCurveTo(193.4, 28.4, 193.5, 28.6, 193.7, 28.8);
      ctx.bezierCurveTo(192.8, 27.5, 192.3, 26.9, 192.2, 25.4);
      ctx.bezierCurveTo(192.1, 24.7, 194.1, 24.2, 193.1, 22.5);
      ctx.bezierCurveTo(192.9, 22.8, 192.5, 23.0, 192.4, 23.3);
      ctx.bezierCurveTo(192.3, 22.5, 192.7, 21.5, 192.6, 20.7);
      ctx.bezierCurveTo(192.5, 19.5, 191.8, 18.7, 191.7, 17.3);
      ctx.bezierCurveTo(191.7, 17.6, 191.7, 17.9, 191.7, 18.2);
      ctx.bezierCurveTo(191.6, 16.8, 191.7, 15.4, 191.8, 14.0);
      ctx.bezierCurveTo(191.8, 14.0, 191.8, 14.1, 191.9, 14.2);
      ctx.bezierCurveTo(193.7, 11.3, 186.6, 3.7, 184.3, 2.5);
      ctx.bezierCurveTo(181.4, 0.9, 180.1, 0.5, 177.0, 0.1);
      ctx.bezierCurveTo(173.8, -0.3, 171.8, 0.4, 168.8, 1.3);
      ctx.bezierCurveTo(167.1, 1.8, 164.8, 5.0, 163.9, 6.5);
      ctx.bezierCurveTo(162.5, 8.5, 162.0, 10.6, 161.2, 12.9);
      ctx.bezierCurveTo(160.1, 16.2, 160.9, 17.6, 162.1, 20.9);
      ctx.bezierCurveTo(162.8, 22.9, 165.3, 24.8, 166.8, 26.2);
      ctx.bezierCurveTo(166.6, 25.9, 166.7, 25.4, 166.5, 25.1);
      ctx.bezierCurveTo(169.6, 27.3, 170.5, 31.7, 173.6, 33.7);
      ctx.bezierCurveTo(174.6, 34.4, 175.6, 35.1, 176.7, 35.8);
      ctx.bezierCurveTo(177.2, 36.1, 177.4, 37.1, 178.0, 37.2);
      ctx.bezierCurveTo(179.9, 37.7, 175.5, 41.4, 175.4, 41.5);
      ctx.bezierCurveTo(172.0, 44.6, 169.4, 46.4, 165.1, 48.0);
      ctx.bezierCurveTo(160.9, 49.6, 161.2, 53.0, 160.3, 56.8);
      ctx.bezierCurveTo(159.9, 58.9, 159.5, 60.9, 159.0, 63.0);
      ctx.bezierCurveTo(158.3, 65.6, 158.6, 67.0, 156.0, 67.8);
      ctx.bezierCurveTo(152.2, 68.9, 149.4, 70.6, 146.7, 73.5);
      ctx.bezierCurveTo(143.5, 76.8, 143.4, 79.8, 143.8, 84.1);
      ctx.bezierCurveTo(144.0, 86.0, 144.7, 87.2, 144.9, 89.0);
      ctx.bezierCurveTo(145.1, 90.9, 144.2, 92.3, 144.8, 94.4);
      ctx.bezierCurveTo(145.2, 95.8, 145.8, 97.3, 146.7, 98.6);
      ctx.bezierCurveTo(147.7, 100.2, 149.5, 99.3, 149.8, 101.6);
      ctx.bezierCurveTo(149.7, 101.4, 149.6, 101.1, 149.6, 100.9);
      ctx.bezierCurveTo(148.4, 103.1, 147.5, 105.3, 146.2, 107.4);
      ctx.bezierCurveTo(146.2, 107.3, 146.3, 107.2, 146.4, 107.1);
      ctx.bezierCurveTo(145.4, 107.2, 143.6, 109.0, 142.5, 109.6);
      ctx.bezierCurveTo(141.0, 110.4, 139.7, 112.3, 138.5, 113.4);
      ctx.bezierCurveTo(137.0, 111.3, 135.5, 109.1, 134.0, 106.9);
      ctx.bezierCurveTo(133.0, 105.6, 128.0, 104.8, 126.4, 104.2);
      ctx.bezierCurveTo(124.4, 103.6, 122.3, 102.3, 120.1, 102.7);
      ctx.bezierCurveTo(118.9, 103.0, 118.4, 101.2, 117.5, 101.5);
      ctx.bezierCurveTo(115.8, 102.0, 115.5, 101.5, 114.0, 100.5);
      ctx.bezierCurveTo(114.1, 100.7, 114.2, 100.9, 114.3, 101.1);
      ctx.bezierCurveTo(114.0, 100.8, 113.9, 100.2, 113.8, 99.8);
      ctx.bezierCurveTo(115.2, 99.3, 116.4, 100.1, 117.4, 98.9);
      ctx.bezierCurveTo(117.9, 98.1, 118.1, 97.7, 118.3, 96.7);
      ctx.bezierCurveTo(118.4, 96.1, 117.4, 95.8, 117.5, 95.1);
      ctx.bezierCurveTo(117.6, 94.5, 117.7, 94.0, 117.8, 93.4);
      ctx.bezierCurveTo(118.2, 91.9, 117.0, 92.5, 117.1, 91.7);
      ctx.bezierCurveTo(117.1, 90.2, 118.7, 89.7, 118.4, 88.4);
      ctx.bezierCurveTo(118.2, 86.7, 118.7, 86.4, 120.3, 85.8);
      ctx.bezierCurveTo(121.7, 85.3, 119.9, 82.6, 119.5, 82.0);
      ctx.bezierCurveTo(118.5, 80.8, 117.2, 79.7, 116.1, 78.6);
      ctx.bezierCurveTo(115.1, 77.6, 115.3, 76.2, 115.2, 74.8);
      ctx.bezierCurveTo(116.2, 74.8, 117.1, 74.8, 118.1, 74.8);
      ctx.bezierCurveTo(117.6, 74.1, 116.6, 73.4, 116.3, 72.6);
      ctx.bezierCurveTo(115.9, 71.7, 116.4, 70.3, 116.1, 69.3);
      ctx.bezierCurveTo(115.4, 66.8, 114.0, 65.8, 112.0, 64.4);
      ctx.bezierCurveTo(110.2, 63.1, 108.2, 62.4, 105.9, 62.4);
      ctx.bezierCurveTo(104.0, 62.4, 102.1, 62.9, 100.3, 62.4);
      ctx.bezierCurveTo(99.3, 62.1, 97.1, 60.8, 96.0, 61.0);
      ctx.bezierCurveTo(93.6, 61.6, 92.1, 63.7, 89.8, 64.3);
      ctx.bezierCurveTo(89.2, 64.4, 86.9, 64.6, 86.7, 65.2);
      ctx.bezierCurveTo(86.2, 66.4, 85.8, 68.0, 85.0, 69.0);
      ctx.bezierCurveTo(84.2, 70.0, 83.5, 71.2, 82.9, 72.2);
      ctx.bezierCurveTo(82.0, 73.5, 82.7, 73.8, 83.0, 75.3);
      ctx.bezierCurveTo(83.4, 76.9, 82.2, 78.6, 81.5, 79.8);
      ctx.bezierCurveTo(81.1, 80.6, 81.3, 82.0, 81.3, 82.9);
      ctx.bezierCurveTo(80.6, 82.5, 80.0, 82.2, 79.4, 81.9);
      ctx.bezierCurveTo(81.6, 85.2, 82.3, 87.4, 82.1, 91.4);
      ctx.bezierCurveTo(82.2, 91.1, 82.3, 90.9, 82.5, 90.7);
      ctx.bezierCurveTo(82.6, 90.6, 83.3, 94.9, 83.4, 95.3);
      ctx.bezierCurveTo(83.8, 96.5, 85.5, 97.6, 86.4, 98.4);
      ctx.bezierCurveTo(84.0, 99.8, 83.6, 100.0, 83.4, 102.7);
      ctx.bezierCurveTo(83.2, 104.6, 82.7, 106.5, 82.6, 108.5);
      ctx.bezierCurveTo(82.7, 107.2, 82.7, 106.0, 82.8, 104.7);
      ctx.bezierCurveTo(80.0, 106.2, 77.1, 107.4, 74.1, 108.7);
      ctx.bezierCurveTo(72.1, 109.5, 68.3, 112.2, 67.3, 114.0);
      ctx.bezierCurveTo(64.4, 119.3, 61.9, 125.7, 61.9, 131.8);
      ctx.bezierCurveTo(61.9, 135.6, 61.5, 138.3, 60.5, 141.9);
      ctx.bezierCurveTo(59.8, 144.9, 57.8, 147.1, 57.6, 150.2);
      ctx.bezierCurveTo(57.5, 153.1, 56.6, 156.4, 56.8, 159.3);
      ctx.bezierCurveTo(56.9, 162.9, 58.8, 165.2, 60.8, 168.0);
      ctx.bezierCurveTo(59.0, 167.5, 57.6, 170.0, 56.9, 171.3);
      ctx.bezierCurveTo(56.2, 172.6, 56.1, 176.3, 55.1, 176.5);
      ctx.bezierCurveTo(51.8, 177.2, 46.5, 177.6, 45.5, 181.6);
      ctx.bezierCurveTo(45.1, 183.5, 45.1, 184.6, 43.5, 185.6);
      ctx.bezierCurveTo(41.3, 187.1, 39.2, 188.5, 37.0, 189.9);
      ctx.bezierCurveTo(33.6, 192.2, 30.1, 194.4, 26.7, 196.6);
      ctx.bezierCurveTo(20.5, 200.7, 13.9, 206.6, 8.9, 212.1);
      ctx.bezierCurveTo(5.9, 215.5, 5.1, 218.9, 6.3, 223.2);
      ctx.bezierCurveTo(7.6, 227.6, 11.7, 229.1, 15.5, 231.0);
      ctx.bezierCurveTo(23.2, 234.8, 30.6, 238.5, 36.9, 244.3);
      ctx.bezierCurveTo(36.2, 245.0, 36.8, 246.1, 36.2, 246.9);
      ctx.bezierCurveTo(35.4, 247.8, 35.2, 249.1, 35.1, 250.3);
      ctx.bezierCurveTo(34.9, 251.8, 33.9, 251.6, 33.9, 253.3);
      ctx.bezierCurveTo(34.0, 254.2, 32.5, 254.5, 32.4, 255.3);
      ctx.bezierCurveTo(31.9, 260.1, 26.7, 264.4, 23.5, 267.6);
      ctx.bezierCurveTo(19.9, 271.2, 15.7, 273.9, 11.1, 276.0);
      ctx.bezierCurveTo(8.4, 277.3, -1.9, 279.1, 1.0, 284.1);
      ctx.bezierCurveTo(-0.8, 284.4, 0.2, 286.8, 1.4, 287.4);
      ctx.bezierCurveTo(3.5, 288.3, 4.5, 288.6, 6.8, 288.6);
      ctx.bezierCurveTo(11.2, 288.6, 15.2, 288.2, 19.6, 287.6);
      ctx.bezierCurveTo(23.3, 287.2, 26.4, 286.0, 29.9, 284.7);
      ctx.bezierCurveTo(31.1, 284.3, 33.1, 281.7, 34.2, 282.0);
      ctx.bezierCurveTo(36.2, 282.7, 37.8, 282.3, 39.9, 282.0);
      ctx.bezierCurveTo(42.5, 281.6, 48.3, 281.6, 48.3, 277.8);
      ctx.bezierCurveTo(48.3, 274.3, 48.0, 270.5, 46.9, 267.1);
      ctx.bezierCurveTo(46.4, 265.4, 45.2, 263.5, 45.1, 261.7);
      ctx.bezierCurveTo(45.1, 260.1, 46.3, 258.3, 45.9, 256.7);
      ctx.bezierCurveTo(45.6, 255.1, 45.8, 255.6, 46.5, 254.3);
      ctx.bezierCurveTo(46.9, 253.7, 47.9, 253.3, 47.7, 252.1);
      ctx.bezierCurveTo(47.4, 250.7, 48.3, 251.3, 48.6, 250.3);
      ctx.bezierCurveTo(49.0, 249.1, 49.6, 249.7, 50.7, 249.9);
      ctx.bezierCurveTo(50.7, 250.1, 50.6, 250.3, 50.5, 250.4);
      ctx.bezierCurveTo(51.8, 247.2, 54.6, 244.2, 56.5, 241.4);
      ctx.bezierCurveTo(58.3, 238.8, 60.2, 236.3, 61.6, 233.5);
      ctx.bezierCurveTo(61.9, 232.9, 67.3, 224.1, 65.8, 223.5);
      ctx.bezierCurveTo(64.9, 223.1, 61.1, 222.2, 60.7, 221.4);
      ctx.bezierCurveTo(60.3, 220.5, 62.5, 216.2, 62.8, 215.3);
      ctx.bezierCurveTo(63.3, 213.8, 63.5, 212.3, 63.8, 210.7);
      ctx.bezierCurveTo(64.2, 208.2, 64.5, 208.6, 67.0, 208.0);
      ctx.bezierCurveTo(70.3, 207.3, 74.0, 208.3, 77.3, 209.1);
      ctx.bezierCurveTo(77.7, 209.2, 81.4, 209.9, 81.3, 210.3);
      ctx.bezierCurveTo(81.2, 212.0, 81.0, 213.7, 80.8, 215.4);
      ctx.bezierCurveTo(80.5, 219.6, 80.1, 223.8, 79.7, 228.0);
      ctx.bezierCurveTo(75.1, 226.8, 70.5, 224.8, 65.9, 224.0);
      ctx.bezierCurveTo(65.3, 228.0, 62.7, 231.5, 60.8, 235.1);
      ctx.bezierCurveTo(62.4, 235.4, 63.3, 235.8, 64.9, 235.9);
      ctx.bezierCurveTo(66.1, 235.9, 65.2, 236.6, 66.0, 236.9);
      ctx.bezierCurveTo(66.7, 237.2, 67.5, 237.3, 68.2, 237.5);
      ctx.bezierCurveTo(69.5, 237.8, 71.1, 239.0, 72.2, 239.7);
      ctx.bezierCurveTo(73.8, 240.8, 74.1, 242.1, 75.2, 243.6);
      ctx.bezierCurveTo(74.4, 244.3, 76.0, 248.6, 76.0, 249.9);
      ctx.bezierCurveTo(76.0, 252.6, 76.6, 255.4, 74.2, 256.8);
      ctx.bezierCurveTo(72.2, 258.0, 69.9, 259.4, 68.0, 261.4);
      ctx.bezierCurveTo(67.0, 262.6, 67.0, 263.3, 66.8, 264.8);
      ctx.bezierCurveTo(66.7, 265.5, 66.3, 265.0, 66.5, 266.1);
      ctx.bezierCurveTo(66.6, 266.8, 67.7, 266.5, 68.3, 266.4);
      ctx.bezierCurveTo(73.5, 266.3, 80.3, 264.5, 84.0, 260.7);
      ctx.bezierCurveTo(86.5, 258.2, 87.0, 256.1, 88.0, 252.7);
      ctx.bezierCurveTo(88.9, 249.9, 89.7, 247.4, 91.5, 245.1);
      ctx.bezierCurveTo(92.0, 245.7, 92.5, 246.3, 93.1, 246.9);
      ctx.bezierCurveTo(93.6, 246.1, 94.1, 245.3, 94.6, 244.5);
      ctx.bezierCurveTo(96.0, 252.9, 97.3, 261.3, 98.7, 269.6);
      ctx.bezierCurveTo(98.9, 270.9, 98.5, 273.6, 98.5, 275.1);
      ctx.bezierCurveTo(98.5, 277.0, 102.2, 276.2, 101.9, 275.2);
      ctx.bezierCurveTo(101.0, 272.1, 100.2, 269.4, 99.8, 266.2);
      ctx.bezierCurveTo(99.0, 260.6, 98.2, 254.9, 97.4, 249.3);
      ctx.bezierCurveTo(97.1, 247.2, 96.8, 245.2, 96.5, 243.1);
      ctx.bezierCurveTo(96.3, 241.5, 97.0, 240.9, 97.9, 239.5);
      ctx.bezierCurveTo(98.8, 238.1, 100.1, 236.6, 98.4, 235.4);
      ctx.bezierCurveTo(97.5, 234.8, 95.2, 233.8, 95.0, 232.6);
      ctx.bezierCurveTo(94.3, 227.6, 93.6, 222.7, 92.9, 217.7);
      ctx.bezierCurveTo(92.9, 217.2, 91.7, 209.6, 91.9, 209.6);
      ctx.bezierCurveTo(93.6, 209.3, 95.4, 209.0, 97.1, 208.7);
      ctx.bezierCurveTo(98.3, 208.5, 100.7, 207.6, 101.8, 208.0);
      ctx.bezierCurveTo(102.7, 208.3, 105.4, 208.7, 105.8, 209.5);
      ctx.bezierCurveTo(106.6, 211.3, 107.4, 213.0, 108.2, 214.8);
      ctx.bezierCurveTo(109.1, 216.9, 110.1, 219.1, 111.0, 221.2);
      ctx.bezierCurveTo(114.6, 229.3, 118.1, 237.3, 121.6, 245.3);
      ctx.bezierCurveTo(122.9, 248.2, 122.7, 248.4, 121.6, 251.5);
      ctx.bezierCurveTo(120.4, 255.0, 119.2, 256.7, 117.7, 260.1);
      ctx.bezierCurveTo(118.5, 260.2, 120.4, 261.1, 120.7, 260.2);
      ctx.bezierCurveTo(121.1, 258.9, 121.6, 257.6, 122.0, 256.3);
      ctx.bezierCurveTo(121.8, 256.2, 121.7, 256.2, 121.5, 256.1);
      ctx.bezierCurveTo(122.2, 254.1, 123.0, 252.0, 123.7, 250.0);
      ctx.bezierCurveTo(124.8, 252.4, 125.8, 254.8, 126.9, 257.3);
      ctx.bezierCurveTo(127.3, 258.2, 127.6, 261.2, 128.0, 262.8);
      ctx.bezierCurveTo(130.4, 262.1, 131.6, 262.3, 130.3, 259.8);
      ctx.bezierCurveTo(129.4, 258.1, 128.6, 256.6, 127.8, 254.8);
      ctx.bezierCurveTo(126.8, 252.4, 125.7, 249.9, 124.7, 247.5);
      ctx.bezierCurveTo(124.4, 246.9, 125.5, 244.9, 125.7, 244.4);
      ctx.bezierCurveTo(129.2, 234.7, 132.7, 225.0, 136.2, 215.3);
      ctx.bezierCurveTo(133.6, 215.2, 134.0, 216.0, 133.1, 218.4);
      ctx.bezierCurveTo(131.9, 221.9, 130.7, 225.4, 129.5, 228.9);
      ctx.bezierCurveTo(127.6, 234.3, 125.7, 239.8, 123.7, 245.3);
      ctx.bezierCurveTo(119.5, 235.4, 115.2, 225.4, 110.9, 215.4);
      ctx.bezierCurveTo(110.2, 213.7, 109.4, 211.9, 108.7, 210.2);
      ctx.bezierCurveTo(108.0, 208.7, 105.8, 207.8, 104.5, 206.9);
      ctx.bezierCurveTo(102.9, 205.8, 98.9, 206.5, 97.0, 206.4);
      ctx.bezierCurveTo(96.5, 206.4, 95.1, 205.8, 94.9, 205.9);
      ctx.bezierCurveTo(93.5, 206.2, 92.1, 206.6, 90.7, 206.9);
      ctx.bezierCurveTo(94.6, 205.9, 97.9, 205.3, 101.9, 205.2);
      ctx.bezierCurveTo(105.8, 205.1, 109.4, 204.7, 113.3, 204.2);
      ctx.bezierCurveTo(115.6, 203.9, 118.0, 203.5, 120.3, 203.2);
      ctx.bezierCurveTo(121.6, 203.0, 122.9, 200.9, 123.9, 200.0);
      ctx.bezierCurveTo(124.7, 199.1, 124.6, 195.2, 124.7, 194.0);
      ctx.bezierCurveTo(125.0, 192.0, 124.9, 190.8, 124.5, 188.8);
      ctx.bezierCurveTo(123.1, 180.8, 123.1, 172.7, 122.9, 164.6);
      ctx.bezierCurveTo(122.9, 162.7, 123.6, 160.5, 124.0, 158.7);
      ctx.bezierCurveTo(124.2, 157.2, 123.9, 155.3, 124.7, 153.9);
      ctx.bezierCurveTo(125.8, 152.0, 126.1, 150.2, 126.7, 148.1);
      ctx.bezierCurveTo(127.1, 146.1, 128.3, 145.0, 129.5, 143.5);
      ctx.bezierCurveTo(127.8, 145.6, 127.1, 146.2, 126.9, 148.7);
      ctx.bezierCurveTo(126.5, 152.7, 126.2, 156.7, 125.8, 160.7);
      ctx.bezierCurveTo(125.2, 166.7, 124.6, 172.7, 124.4, 178.7);
      ctx.bezierCurveTo(124.3, 181.8, 123.9, 185.1, 124.4, 188.2);
      ctx.bezierCurveTo(124.6, 189.4, 125.1, 190.8, 125.0, 192.1);
      ctx.bezierCurveTo(124.8, 193.5, 124.3, 195.2, 124.5, 196.6);
      ctx.bezierCurveTo(125.4, 200.8, 126.4, 202.0, 130.8, 201.3);
      ctx.bezierCurveTo(132.5, 201.0, 133.9, 195.1, 134.6, 193.5);
      ctx.bezierCurveTo(133.6, 195.9, 131.1, 199.5, 131.0, 202.1);
      ctx.bezierCurveTo(130.9, 205.8, 130.9, 209.6, 130.8, 213.4);
      ctx.bezierCurveTo(130.7, 215.0, 130.4, 215.0, 132.0, 215.1);
      ctx.bezierCurveTo(133.9, 215.2, 135.9, 215.3, 137.9, 215.4);
      ctx.bezierCurveTo(140.9, 215.5, 144.5, 214.1, 147.4, 213.6);
      ctx.bezierCurveTo(144.7, 231.7, 142.0, 249.8, 139.3, 268.0);
      ctx.bezierCurveTo(134.9, 266.0, 132.2, 278.5, 134.2, 281.3);
      ctx.bezierCurveTo(133.8, 281.3, 133.5, 281.3, 133.2, 281.3);
      ctx.bezierCurveTo(133.2, 281.9, 132.9, 286.0, 133.3, 286.2);
      ctx.bezierCurveTo(135.4, 286.9, 137.6, 287.7, 139.7, 288.5);
      ctx.bezierCurveTo(141.5, 289.1, 143.0, 288.9, 144.9, 288.8);
      ctx.bezierCurveTo(145.7, 288.8, 147.5, 291.1, 148.7, 291.5);
      ctx.bezierCurveTo(152.9, 293.0, 156.4, 293.3, 160.9, 293.6);
      ctx.bezierCurveTo(164.2, 293.8, 168.1, 294.6, 171.3, 293.9);
      ctx.bezierCurveTo(173.4, 293.5, 175.5, 293.1, 177.5, 292.6);
      ctx.bezierCurveTo(177.9, 292.6, 179.3, 291.8, 179.4, 291.5);
      ctx.bezierCurveTo(179.9, 289.9, 177.9, 290.3, 177.8, 289.7);
      ctx.bezierCurveTo(177.4, 288.5, 178.6, 288.2, 177.4, 287.3);
      ctx.bezierCurveTo(176.5, 286.7, 176.1, 286.3, 175.5, 285.3);
      ctx.bezierCurveTo(174.9, 284.4, 172.6, 283.6, 171.5, 283.0);
      ctx.bezierCurveTo(167.6, 280.7, 164.4, 278.5, 160.9, 275.6);
      ctx.bezierCurveTo(159.3, 274.3, 158.6, 273.3, 157.5, 271.5);
      ctx.bezierCurveTo(156.7, 270.2, 157.2, 269.2, 157.4, 267.5);
      ctx.bezierCurveTo(161.3, 269.8, 165.2, 272.1, 169.1, 274.3);
      ctx.bezierCurveTo(169.5, 274.5, 172.7, 276.6, 173.1, 275.9);
      ctx.bezierCurveTo(174.0, 274.0, 175.0, 272.2, 175.9, 270.3);
      ctx.bezierCurveTo(176.9, 268.3, 180.5, 258.5, 182.8, 259.0);
      ctx.bezierCurveTo(186.4, 259.7, 191.4, 257.9, 194.6, 256.2);
      ctx.bezierCurveTo(195.7, 259.7, 197.0, 263.0, 197.6, 266.5);
      ctx.bezierCurveTo(198.2, 269.7, 198.0, 269.5, 201.2, 269.7);
      ctx.bezierCurveTo(202.8, 269.7, 200.0, 264.5, 199.8, 264.1);
      ctx.bezierCurveTo(199.0, 262.4, 195.3, 254.4, 198.1, 254.4);
      ctx.bezierCurveTo(198.7, 254.4, 200.2, 255.8, 200.8, 256.2);
      ctx.bezierCurveTo(201.3, 256.6, 202.5, 256.3, 203.0, 256.3);
      ctx.bezierCurveTo(205.4, 256.3, 207.2, 256.2, 209.5, 255.7);
      ctx.bezierCurveTo(211.9, 255.3, 211.4, 253.8, 211.8, 251.5);
      ctx.bezierCurveTo(212.0, 250.8, 212.3, 250.0, 212.2, 249.2);
      ctx.bezierCurveTo(212.1, 248.6, 211.5, 248.1, 211.5, 247.5);
      ctx.bezierCurveTo(211.4, 246.8, 211.0, 245.2, 211.7, 244.9);
      ctx.bezierCurveTo(212.8, 244.4, 212.6, 244.5, 212.5, 243.3);
      ctx.bezierCurveTo(212.4, 241.3, 212.5, 239.1, 212.0, 237.1);
      ctx.bezierCurveTo(211.5, 234.9, 211.0, 232.7, 210.5, 230.5);
      ctx.bezierCurveTo(210.1, 229.0, 208.8, 227.3, 208.8, 225.8);
      ctx.bezierCurveTo(208.9, 223.3, 209.0, 220.9, 209.1, 218.5);
      ctx.bezierCurveTo(209.1, 216.6, 208.2, 215.0, 207.6, 213.2);
      ctx.bezierCurveTo(207.7, 212.9, 208.8, 210.3, 208.6, 209.3);
      ctx.bezierCurveTo(208.4, 207.4, 208.2, 205.5, 207.9, 203.6);
      ctx.bezierCurveTo(208.6, 203.6, 209.2, 203.6, 209.9, 203.6);
      ctx.bezierCurveTo(210.1, 201.5, 207.3, 200.4, 205.8, 199.4);
      ctx.bezierCurveTo(207.0, 200.2, 208.1, 201.0, 209.3, 201.8);
      ctx.bezierCurveTo(210.1, 202.4, 209.5, 203.4, 210.4, 204.1);
      ctx.bezierCurveTo(211.8, 205.1, 212.3, 205.7, 214.0, 205.6);
      ctx.bezierCurveTo(214.9, 205.5, 215.3, 204.2, 216.4, 204.2);
      ctx.bezierCurveTo(216.2, 214.9, 216.2, 225.5, 216.4, 236.2);
      ctx.bezierCurveTo(216.4, 240.8, 217.7, 245.0, 217.1, 249.5);
      ctx.bezierCurveTo(216.8, 252.2, 216.4, 253.9, 216.7, 256.7);
      ctx.bezierCurveTo(217.0, 259.7, 218.0, 260.8, 220.6, 261.8);
      ctx.bezierCurveTo(220.7, 260.9, 220.9, 260.0, 221.0, 259.1);
      ctx.bezierCurveTo(220.5, 262.8, 219.7, 265.9, 220.9, 269.4);
      ctx.bezierCurveTo(219.6, 269.6, 220.4, 271.7, 220.5, 272.7);
      ctx.bezierCurveTo(220.8, 274.8, 221.3, 274.6, 223.2, 275.6);
      ctx.bezierCurveTo(225.4, 276.6, 229.3, 275.7, 231.7, 275.7);
      ctx.bezierCurveTo(233.0, 275.6, 234.4, 275.6, 235.7, 275.6);
      ctx.bezierCurveTo(236.6, 275.6, 236.2, 273.2, 236.9, 273.2);
      ctx.bezierCurveTo(239.9, 273.2, 241.8, 273.9, 244.4, 275.4);
      ctx.bezierCurveTo(247.4, 277.1, 248.9, 277.4, 252.3, 277.7);
      ctx.bezierCurveTo(255.2, 277.9, 257.4, 277.9, 260.2, 277.6);
      ctx.bezierCurveTo(263.0, 277.3, 265.6, 277.0, 268.3, 276.2);
      ctx.bezierCurveTo(269.8, 275.9, 271.2, 275.5, 272.7, 275.1);
      ctx.bezierCurveTo(274.3, 274.6, 272.5, 272.7, 271.6, 272.5);
      ctx.lineTo(271.6, 272.5);
      ctx.lineTo(271.6, 272.5);
      ctx.closePath();

      // layer1/Group/Compound Path/Path
      ctx.moveTo(38.8, 240.5);
      ctx.bezierCurveTo(38.3, 241.9, 37.8, 243.3, 37.4, 244.7);
      ctx.bezierCurveTo(37.4, 244.5, 37.5, 244.4, 37.5, 244.2);
      ctx.bezierCurveTo(37.5, 244.4, 37.4, 244.5, 37.3, 244.7);
      ctx.bezierCurveTo(37.8, 243.3, 38.3, 241.9, 38.8, 240.5);
      ctx.lineTo(38.8, 240.5);
      ctx.lineTo(38.8, 240.5);
      ctx.closePath();

      // layer1/Group/Compound Path/Path
      ctx.moveTo(87.1, 99.2);
      ctx.bezierCurveTo(87.1, 99.1, 87.1, 99.0, 86.9, 98.9);
      ctx.bezierCurveTo(87.1, 99.0, 87.1, 99.1, 87.1, 99.2);
      ctx.lineTo(87.1, 99.2);
      ctx.closePath();

      // layer1/Group/Compound Path/Path
      ctx.moveTo(86.7, 98.7);
      ctx.bezierCurveTo(86.6, 98.6, 86.6, 98.5, 86.5, 98.4);
      ctx.bezierCurveTo(86.6, 98.5, 86.6, 98.6, 86.7, 98.7);
      ctx.lineTo(86.7, 98.7);
      ctx.closePath();

      // layer1/Group/Compound Path/Path
      ctx.moveTo(92.5, 231.3);
      ctx.bezierCurveTo(90.6, 229.9, 88.9, 228.6, 86.6, 228.4);
      ctx.bezierCurveTo(85.7, 228.4, 81.9, 229.2, 81.9, 227.6);
      ctx.bezierCurveTo(82.2, 221.9, 82.4, 216.1, 82.7, 210.4);
      ctx.bezierCurveTo(84.1, 210.8, 88.4, 209.4, 89.1, 210.1);
      ctx.bezierCurveTo(89.8, 210.7, 89.8, 214.5, 90.0, 215.4);
      ctx.bezierCurveTo(90.8, 220.7, 91.7, 226.0, 92.5, 231.3);
      ctx.lineTo(92.5, 231.3);
      ctx.lineTo(92.5, 231.3);
      ctx.closePath();

      // layer1/Group/Compound Path/Path
      ctx.moveTo(210.8, 174.1);
      ctx.bezierCurveTo(211.4, 174.7, 212.1, 175.2, 212.6, 175.9);
      ctx.bezierCurveTo(211.4, 175.6, 210.2, 175.3, 209.0, 175.0);
      ctx.bezierCurveTo(209.2, 175.2, 209.3, 175.3, 209.5, 175.4);
      ctx.bezierCurveTo(208.0, 173.9, 205.5, 173.6, 203.5, 173.0);
      ctx.bezierCurveTo(204.8, 173.4, 206.1, 173.8, 207.4, 174.2);
      ctx.bezierCurveTo(207.0, 170.5, 206.7, 168.2, 204.8, 165.1);
      ctx.bezierCurveTo(206.1, 167.2, 207.1, 169.6, 208.7, 171.5);
      ctx.bezierCurveTo(209.6, 172.7, 209.8, 173.9, 211.1, 173.2);
      ctx.bezierCurveTo(212.4, 172.4, 213.7, 171.7, 215.0, 171.0);
      ctx.bezierCurveTo(213.9, 171.6, 210.3, 172.8, 210.8, 174.1);
      ctx.lineTo(210.8, 174.1);
      ctx.lineTo(210.8, 174.1);
      ctx.closePath();

      // layer1/Group/Compound Path/Path
      ctx.moveTo(185.0, 143.0);
      ctx.bezierCurveTo(186.8, 151.4, 187.5, 159.9, 188.6, 168.4);
      ctx.bezierCurveTo(187.1, 167.0, 184.1, 166.4, 183.5, 164.7);
      ctx.bezierCurveTo(182.4, 161.6, 182.7, 161.1, 183.8, 158.0);
      ctx.bezierCurveTo(185.4, 153.2, 184.4, 148.1, 185.0, 143.0);
      ctx.lineTo(185.0, 143.0);
      ctx.lineTo(185.0, 143.0);
      ctx.closePath();

      // layer1/Group/Compound Path/Path
      ctx.moveTo(185.4, 140.4);
      ctx.bezierCurveTo(186.4, 141.9, 187.4, 143.3, 188.4, 144.8);
      ctx.bezierCurveTo(187.4, 143.3, 186.4, 141.7, 185.3, 140.4);
      ctx.bezierCurveTo(185.3, 140.5, 185.3, 140.5, 185.3, 140.6);
      ctx.bezierCurveTo(185.3, 140.4, 185.2, 140.3, 185.4, 140.4);
      ctx.lineTo(185.4, 140.4);
      ctx.lineTo(185.4, 140.4);
      ctx.closePath();

      // layer1/Group/Compound Path/Path
      ctx.moveTo(187.1, 111.1);
      ctx.bezierCurveTo(186.7, 110.1, 186.2, 109.1, 185.8, 108.1);
      ctx.bezierCurveTo(186.2, 109.1, 186.7, 110.1, 187.1, 111.1);
      ctx.lineTo(187.1, 111.1);
      ctx.lineTo(187.1, 111.1);
      ctx.closePath();

      // layer1/Group/Compound Path/Path
      ctx.moveTo(182.4, 50.5);
      ctx.bezierCurveTo(181.9, 51.6, 181.5, 52.6, 181.0, 53.7);
      ctx.bezierCurveTo(182.0, 51.5, 182.9, 49.4, 183.9, 47.2);
      ctx.bezierCurveTo(183.4, 48.3, 182.9, 49.4, 182.4, 50.5);
      ctx.lineTo(182.4, 50.5);
      ctx.lineTo(182.4, 50.5);
      ctx.closePath();

      // layer1/Group/Compound Path/Path
      ctx.moveTo(175.8, 81.9);
      ctx.bezierCurveTo(176.8, 83.7, 177.7, 85.6, 178.7, 87.5);
      ctx.bezierCurveTo(179.3, 88.6, 181.3, 91.5, 181.2, 92.6);
      ctx.bezierCurveTo(181.1, 93.8, 178.9, 95.9, 178.3, 97.2);
      ctx.bezierCurveTo(177.2, 99.3, 176.2, 101.5, 175.1, 103.6);
      ctx.bezierCurveTo(176.1, 103.7, 177.1, 103.9, 178.1, 104.0);
      ctx.bezierCurveTo(175.7, 103.7, 172.9, 102.9, 170.5, 103.0);
      ctx.bezierCurveTo(172.3, 100.6, 172.6, 98.5, 172.8, 95.6);
      ctx.bezierCurveTo(175.7, 96.4, 174.4, 92.5, 174.5, 91.1);
      ctx.bezierCurveTo(174.7, 89.1, 174.9, 86.4, 173.0, 85.3);
      ctx.bezierCurveTo(172.9, 86.5, 172.8, 87.7, 172.8, 88.9);
      ctx.bezierCurveTo(172.9, 86.7, 173.0, 84.6, 173.3, 82.5);
      ctx.bezierCurveTo(173.6, 80.6, 172.5, 78.2, 172.0, 76.4);
      ctx.bezierCurveTo(173.8, 78.2, 174.7, 79.5, 175.8, 81.9);
      ctx.lineTo(175.8, 81.9);
      ctx.lineTo(175.8, 81.9);
      ctx.closePath();

      // layer1/Group/Compound Path/Path
      ctx.moveTo(212.5, 175.0);
      ctx.bezierCurveTo(213.1, 175.9, 213.6, 176.7, 214.2, 177.6);
      ctx.bezierCurveTo(213.6, 176.7, 213.1, 175.9, 212.5, 175.0);
      ctx.lineTo(212.5, 175.0);
      ctx.lineTo(212.5, 175.0);
      ctx.closePath();

      // layer1/Group/Compound Path/Path
      ctx.moveTo(222.4, 202.1);
      ctx.bezierCurveTo(221.3, 202.4, 220.2, 202.7, 219.1, 203.0);
      ctx.bezierCurveTo(220.2, 202.7, 221.3, 202.4, 222.4, 202.1);
      ctx.lineTo(222.4, 202.1);
      ctx.lineTo(222.4, 202.1);
      ctx.closePath();

      // layer1/Group/Compound Path/Path
      ctx.moveTo(226.0, 250.5);
      ctx.bezierCurveTo(229.8, 250.0, 235.2, 249.5, 239.6, 249.0);
      ctx.bezierCurveTo(235.1, 249.5, 230.5, 250.0, 226.0, 250.5);
      ctx.lineTo(226.0, 250.5);
      ctx.lineTo(226.0, 250.5);
      ctx.closePath();

      // layer1/Group/Compound Path/Path
      ctx.moveTo(232.3, 80.4);
      ctx.bezierCurveTo(233.1, 82.3, 233.7, 82.9, 235.3, 84.1);
      ctx.bezierCurveTo(235.8, 84.5, 234.2, 86.7, 234.3, 87.5);
      ctx.bezierCurveTo(234.5, 89.3, 236.4, 96.7, 234.5, 97.9);
      ctx.bezierCurveTo(234.5, 97.7, 234.5, 97.5, 234.4, 97.2);
      ctx.bezierCurveTo(234.4, 97.4, 234.3, 98.0, 234.3, 98.1);
      ctx.bezierCurveTo(234.2, 96.1, 234.5, 93.8, 234.1, 91.9);
      ctx.bezierCurveTo(233.7, 89.9, 232.3, 88.1, 231.7, 86.1);
      ctx.bezierCurveTo(230.4, 81.7, 229.2, 77.4, 228.2, 72.9);
      ctx.bezierCurveTo(228.3, 73.1, 228.5, 73.4, 228.6, 73.6);
      ctx.bezierCurveTo(228.5, 73.5, 228.5, 73.3, 228.5, 73.1);
      ctx.bezierCurveTo(229.7, 74.2, 230.9, 75.2, 232.0, 76.2);
      ctx.bezierCurveTo(234.4, 78.1, 234.1, 77.9, 232.3, 80.4);
      ctx.lineTo(232.3, 80.4);
      ctx.lineTo(232.3, 80.4);
      ctx.closePath();

      // layer1/Group/Compound Path/Path
      ctx.moveTo(146.6, 258.9);
      ctx.bezierCurveTo(145.1, 260.7, 143.7, 262.6, 142.2, 264.4);
      ctx.bezierCurveTo(141.3, 265.7, 141.2, 265.9, 141.0, 267.8);
      ctx.bezierCurveTo(140.9, 268.6, 138.9, 269.7, 138.3, 270.1);
      ctx.bezierCurveTo(139.1, 269.5, 139.8, 268.9, 140.6, 268.3);
      ctx.bezierCurveTo(140.3, 268.2, 140.0, 268.1, 139.7, 268.1);
      ctx.bezierCurveTo(140.0, 268.1, 140.2, 268.2, 140.5, 268.3);
      ctx.bezierCurveTo(143.0, 252.6, 145.5, 236.9, 148.0, 221.2);
      ctx.bezierCurveTo(148.4, 218.7, 148.8, 216.2, 149.2, 213.6);
      ctx.bezierCurveTo(149.4, 212.4, 155.5, 211.9, 156.5, 211.7);
      ctx.bezierCurveTo(157.7, 211.4, 159.4, 211.4, 160.5, 210.8);
      ctx.bezierCurveTo(161.6, 210.1, 163.7, 208.3, 164.8, 209.1);
      ctx.bezierCurveTo(166.3, 210.3, 167.7, 210.9, 169.5, 211.6);
      ctx.bezierCurveTo(170.6, 212.0, 173.7, 212.4, 172.0, 213.9);
      ctx.bezierCurveTo(172.2, 213.7, 172.4, 213.5, 172.6, 213.3);
      ctx.bezierCurveTo(172.6, 213.9, 173.0, 216.0, 172.8, 216.5);
      ctx.bezierCurveTo(172.5, 217.4, 170.6, 218.6, 169.9, 219.3);
      ctx.bezierCurveTo(168.5, 220.6, 167.7, 222.3, 166.7, 224.0);
      ctx.bezierCurveTo(164.3, 228.1, 161.9, 232.1, 159.5, 236.2);
      ctx.bezierCurveTo(157.0, 240.5, 154.6, 244.9, 151.8, 249.0);
      ctx.bezierCurveTo(150.0, 251.7, 148.2, 254.3, 146.4, 257.0);
      ctx.bezierCurveTo(145.3, 258.5, 147.9, 261.0, 148.8, 262.4);
      ctx.bezierCurveTo(148.1, 261.2, 147.3, 260.1, 146.6, 258.9);
      ctx.lineTo(146.6, 258.9);
      ctx.lineTo(146.6, 258.9);
      ctx.closePath();

      // layer1/Group/Compound Path/Path
      ctx.moveTo(190.0, 247.3);
      ctx.bezierCurveTo(188.8, 248.3, 187.0, 249.2, 186.0, 250.4);
      ctx.bezierCurveTo(185.0, 251.6, 184.4, 253.7, 183.7, 255.2);
      ctx.bezierCurveTo(187.9, 246.5, 191.9, 237.7, 196.5, 229.3);
      ctx.bezierCurveTo(196.9, 231.5, 195.4, 234.5, 194.9, 236.7);
      ctx.bezierCurveTo(194.3, 238.7, 193.5, 240.6, 192.7, 242.5);
      ctx.bezierCurveTo(192.3, 241.4, 191.9, 240.2, 191.6, 239.1);
      ctx.bezierCurveTo(190.9, 240.5, 190.1, 241.3, 190.6, 242.9);
      ctx.bezierCurveTo(191.3, 245.3, 191.9, 245.6, 190.0, 247.3);
      ctx.lineTo(190.0, 247.3);
      ctx.lineTo(190.0, 247.3);
      ctx.closePath();

      // layer1/Group/Compound Path/Path
      ctx.moveTo(193.9, 246.3);
      ctx.bezierCurveTo(195.1, 247.2, 196.3, 248.0, 197.4, 248.8);
      ctx.lineTo(193.9, 246.3);
      ctx.lineTo(193.9, 246.3);
      ctx.closePath();
      ctx.fill();
      ctx.restore();
      ctx.restore();
    }
    init();

}