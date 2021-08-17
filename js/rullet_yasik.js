// Helpers
	shuffle = function(array) {
		for (let index = array.length -1; index > 0; index--) {
			// 무작위 index 값을 만든다. (0 이상의 배열 길이 값)
			const randomPosition = Math.floor(Math.random() * (index + 1));

			// 임시로 원본 값을 저장하고, randomPosition을 사용해 배열 요소를 섞는다.
			const temporary = array[index];
			array[index] = array[randomPosition];
			array[randomPosition] = temporary;
		}
	}

	// shuffle = function(o) {
	// 	for ( var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x)
	// 		;
	// 	return o;
	// };

	String.prototype.hashCode = function(){
		// See http://www.cse.yorku.ca/~oz/hash.html		
		var hash = 5381;
		for (i = 0; i < this.length; i++) {
			char = this.charCodeAt(i);
			hash = ((hash<<5)+hash) + char;
			hash = hash & hash; // Convert to 32bit integer
		}
		return hash;
	}

	Number.prototype.mod = function(n) {
		return ((this%n)+n)%n;
	}
/*
	Copyright (c) 2011, Andrew Brampton (bramp.net)
	All rights reserved.

	Redistribution and use in source and binary forms, with or without
	modification, are permitted provided that the following conditions are met:
	* Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
	* Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
	* Neither the name of the <copyright holder> nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.

	THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL <COPYRIGHT HOLDER> BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/
	var yasic_list = ["곱창", "족발", "치킨", "떡볶이", "오뎅", "만두", "닭발", "피자", "보쌈", "라면", "햄버거", "전", "비빔밥", "회", "냉면", "케이크", "김치찌개", "스파게티", "돼지두루치기", "골뱅이무침", "소시지", "아구찜", "순두부찌개", "뼈해장국", "삼계탕", "닭도리탕", "토스트", "낚지볶음", "곰탕", "회덮밥", "해물찜", "스시", "삼겹살", "짬뽕", "막창", "쭈꾸미", "야채곱창", "타꼬야키", "순대" ,"우동", "감자탕", "꼬치구이", "튀김", "빵", "부대찌개","차돌된장찌개", "치킨마요", "홍합탕", "짜장면", "칼국수", "낚지곱창새우", "닭똥집", "과일", "파스타", "수육", "로제찜닭", "찜닭", "마라탕", "옛날통닭", "마라샹궈", "감바스", "닭갈비"];

	var beer_list = ["카스", "하이트","칭따오", "피츠", "테라","블랑","써머스비","아사히","기린이치방","삿포로","호가든","호가든로제","타이거","클라우드","에델바이스","에델바이스피치","파울라너","예거", "하이네켄", "말표","해운대","제주위트에일","곰표","성산일출봉에일","오비라거", "한맥","이슬톡톡","브라더소다", "KGB","크루져", "기네스","경복궁","남산","데스페라도스","스텔라","애플퍽스"];

	var dessert_list = ["휘낭시에", "마카롱", "까눌레", "크루아상", "스콘", "에그타르트", "크로플", "브라우니", "도넛", "브리오슈 식빵", "프렌치 토스트", "수플레", "크로칸슈", "갈릭브레드", "육쪽마늘빵", "클럽샌드위치", "파니니", "잠봉뵈르 샌드위치", "시나몬 롤", "앙버터", "빨미까레", "프레첼", "피칸파이", "베이글", "메론빵", "크림빵", "서브웨이", "에그드랍", "이삭토스트", "모카빵", "명란 바게트", "뺑 오 쇼콜라", "소세지 롤", "초코소라빵", "맘모스빵", "핫도그", "핫케이크", "버터쫀득바", "스모어쿠키", "슈크림", "팥빙수", "녹차빙수", "요거트빙수", "초코빙수", "백설기", "송편", "무지개떡", "인절미","아이스크림", "고구마케이크", "레드벨벳", "티라미수", "뉴욕치즈케이크", "스트로베리 초콜릿 생크림", "초코케이크", "아이스박스", "딸기생크림케이크", "흑임자 갸또", "당근케이크", "마스카포네 생크림", "인절미 클라우드 생크림", "쿠키앤크림 케이크", "클래식 갸또", "크렘 브륄레"];

	var lunch_list = ["백반", "부대찌개", "김치찌개", "돈까스", "짜장면", "순두부찌개", "불고기", "해장국", "햄버거", "분식", "불고기 백반", "닭볶음", "닭갈비", "쌈밥", "비빔밥", "생선구이", "낙지볶음", "떡갈비", "청국장찌개", "순두부찌개", "고추장찌개", "부대찌개", "김치찌개", "된장찌개", "육개장", "추어탕", "갈비탕", "순대국", "뼈해장국", "감자탕", "콩나물국밥", "떡국", "설렁탕", "만둣국", "삼계탕", "제육덮밥", "비빔밥", "카레", "김치볶음밥", "오징어덮밥", "짜장밥", "짬뽕", "오므라이스", "계란간장밥", "스테이크", "아귀찜", "수육", "월남쌈", "샤브샤브", "삼겹살", "쭈꾸미볶음", "마파두부", "양꼬치", "마라탕", "초밥", "라멘", "우동", "오니기리", "연어덮밥", "메밀소바", "햄버거", "유부초밥", "파스타", "회덮밥", "피자", "리조또", "칼국수", "콩국수", "볶음우동", "잔치국수", "라면", "비빔냉면", "물냉면"];
	

	const selectIndex = (totalIndex, selectingNumber) => {
		let randomIndexArray = []
		for (i=0; i<selectingNumber; i++) {   //check if there is any duplicate index
			randomNum = Math.floor(Math.random() * totalIndex)
			if (randomIndexArray.indexOf(randomNum) === -1) {
			randomIndexArray.push(randomNum)
			} else { //if the randomNum is already in the array retry
			i--
			}
		}
		return randomIndexArray
	};
	
	yasicNum = selectIndex(yasic_list.length, 17);
	beerNum = selectIndex(beer_list.length, 17);
	dessertNum = selectIndex(dessert_list.lenght, 17);
	lunchNum = selectIndex(lunch_list.length, 17);
	
    yasic_venues = {
		"116208"  : yasic_list[yasicNum[0]],
		"66271"   : yasic_list[yasicNum[1]],
		"5518"    : yasic_list[yasicNum[2]],
		"392360"  : yasic_list[yasicNum[3]],
		"2210952" : yasic_list[yasicNum[4]],
		"207306"  : yasic_list[yasicNum[5]],
		"41457"   : yasic_list[yasicNum[6]],
		"101161"  : yasic_list[yasicNum[7]],
		"257424"  : yasic_list[yasicNum[8]],
		"512060"  : yasic_list[yasicNum[9]],
		"66244"   : yasic_list[yasicNum[10]],
		"352867"  : yasic_list[yasicNum[11]],
		"22493"   : yasic_list[yasicNum[12]],
		"268052"  : yasic_list[yasicNum[13]],
		"5665"    : yasic_list[yasicNum[14]],
		"129724"  : yasic_list[yasicNum[15]],
		"42599"   : yasic_list[yasicNum[16]],
	};

    beer_venues = {
		"116208"  : beer_list[beerNum[0]],
		"66271"   : beer_list[beerNum[1]],
		"5518"    : beer_list[beerNum[2]],
		"392360"  : beer_list[beerNum[3]],
		"2210952" : beer_list[beerNum[4]],
		"207306"  : beer_list[beerNum[5]],
		"41457"   : beer_list[beerNum[6]],
		"101161"  : beer_list[beerNum[7]],
		"257424"  : beer_list[beerNum[8]],
		"512060"  : beer_list[beerNum[9]],
		"66244"   : beer_list[beerNum[10]],
		"352867"  : beer_list[beerNum[11]],
		"22493"   : beer_list[beerNum[12]],
		"268052"  : beer_list[beerNum[13]],
		"5665"    : beer_list[beerNum[14]],
		"129724"  : beer_list[beerNum[15]],
		"42599"   : beer_list[beerNum[16]],
	};

    dessert_venues = {
		"116208"  : dessert_list[dessertNum[0]],
		"66271"   : dessert_list[dessertNum[1]],
		"5518"    : dessert_list[dessertNum[2]],
		"392360"  : dessert_list[dessertNum[3]],
		"2210952" : dessert_list[dessertNum[4]],
		"207306"  : dessert_list[dessertNum[5]],
		"41457"   : dessert_list[dessertNum[6]],
		"101161"  : dessert_list[dessertNum[7]],
		"257424"  : dessert_list[dessertNum[8]],
		"512060"  : dessert_list[dessertNum[9]],
		"66244"   : dessert_list[dessertNum[10]],
		"352867"  : dessert_list[dessertNum[11]],
		"22493"   : dessert_list[dessertNum[12]],
		"268052"  : dessert_list[dessertNum[13]],
		"5665"    : dessert_list[dessertNum[14]],
		"129724"  : dessert_list[dessertNum[15]],
		"42599"   : dessert_list[dessertNum[16]],
	};

    lunch_venues = {
		"116208"  : lunch_list[lunchNum[0]],
		"66271"   : lunch_list[lunchNum[1]],
		"5518"    : lunch_list[lunchNum[2]],
		"392360"  : lunch_list[lunchNum[3]],
		"2210952" : lunch_list[lunchNum[4]],
		"207306"  : lunch_list[lunchNum[5]],
		"41457"   : lunch_list[lunchNum[6]],
		"101161"  : lunch_list[lunchNum[7]],
		"257424"  : lunch_list[lunchNum[8]],
		"512060"  : lunch_list[lunchNum[9]],
		"66244"   : lunch_list[lunchNum[10]],
		"352867"  : lunch_list[lunchNum[11]],
		"22493"   : lunch_list[lunchNum[12]],
		"268052"  : lunch_list[lunchNum[13]],
		"5665"    : lunch_list[lunchNum[14]],
		"129724"  : lunch_list[lunchNum[15]],
		"42599"   : lunch_list[lunchNum[16]],
	};
	
	$(function() {

		var venueContainer = $('#venues ul');
		$.each(yasic_venues, function(key, item) {
			venueContainer.append(
		        $(document.createElement("li"))
		        .append(
	                $(document.createElement("input")).attr({
                         id:    'venue-' + key
                        ,name:  item
                        ,value: item
                        ,type:  'checkbox'
                        ,checked:true
	                })
	                .change( function() {
	                	var cbox = $(this)[0];
	                	var segments = wheel.segments;
	                	var i = segments.indexOf(cbox.value);

	                	if (cbox.checked && i == -1) {
	                		segments.push(cbox.value);

	                	} else if ( !cbox.checked && i != -1 ) {
	                		segments.splice(i, 1);
	                	}

	                	segments.sort();
	                	wheel.update();
	                } )

		        ).append(
	                $(document.createElement('label')).attr({
	                    'for':  'venue-' + key
	                })
	                .text( item )
		        )
		    )
		});

		$('#venues ul>li').tsort("input", {attr: "value"});
	});

	//  + wheel.segment[i] + ""
/****************************************
 * Wheel starts here
 ***************************************/

	var wheel = {


		timerHandle : 0,
		timerDelay : 33,

		angleCurrent : 0,
		angleDelta : 0,

		size : 290,

		canvasContext : null,

		// colors : [ '#ffff00', '#ffc700', '#ff9100', '#ff6301', '#ff0000', '#c6037e',
		//            '#713697', '#444ea1', '#2772b2', '#0297ba', '#008e5b', '#8ac819',
		// 		   '#45c819', '#95a5ab', '#2667ff', '#3ba7ff', '#3bfff8', '#3bffb4'],

		colors : [
			'#ff0000', '#ff8400', '#ffc800', '#ffff00', '#99ff00', '#3cff00', '#00ffae', '#00ffee', '#00bfff', '#0077ff',
			'#8000ff', '#b700ff', '#ff00fb', '#ff009d', '#db9797', '#999999', '#8f836a'
		],

		//segments : [ 'Andrew', 'Bob', 'Fred', 'John', 'China', 'Steve', 'Jim', 'Sally', 'Andrew', 'Bob', 'Fred', 'John', 'China', 'Steve', 'Jim'],
		segments : [],

		seg_colors : [], // Cache of segments to colors
		
		maxSpeed : Math.PI / 16,

		upTime : 1000, // How long to spin up for (in ms)
		downTime : 5000, // How long to slow down for (in ms)

		spinStart : 0,

		frames : 0,

		centerX : 300,
		centerY : 300,

		spin : function() {

			// Start the wheel only if it's not already spinning
			if (wheel.timerHandle == 0) {
				wheel.spinStart = new Date().getTime();
				wheel.maxSpeed = Math.PI / (16 + Math.random()); // Randomly vary how hard the spin is
				wheel.frames = 0;
				// wheel.sound.play();

				wheel.timerHandle = setInterval(wheel.onTimerTick, wheel.timerDelay);
			}
		},

		onTimerTick : function() {

			wheel.frames++;

			wheel.draw();

			var duration = (new Date().getTime() - wheel.spinStart);
			var progress = 0;
			var finished = false;

			if (duration < wheel.upTime) {
				progress = duration / wheel.upTime;
				wheel.angleDelta = wheel.maxSpeed
						* Math.sin(progress * Math.PI / 2);
			} else {
				progress = duration / wheel.downTime;
				wheel.angleDelta = wheel.maxSpeed
						* Math.sin(progress * Math.PI / 2 + Math.PI / 2);
				if (progress >= 1)
					finished = true;
			}

			wheel.angleCurrent += wheel.angleDelta;
			while (wheel.angleCurrent >= Math.PI * 2)
				// Keep the angle in a reasonable range
				wheel.angleCurrent -= Math.PI * 2;

			if (finished) {
				clearInterval(wheel.timerHandle);
				wheel.timerHandle = 0;
				wheel.angleDelta = 0;

				$("#counter").html((wheel.frames / duration * 1000) + " FPS");
			}
		},

		init : function(optionList) {
			try {
				wheel.initWheel();
				// wheel.initAudio();
				wheel.initCanvas();
				wheel.draw();

				$.extend(wheel, optionList);

			} catch (exceptionData) {
				alert('Wheel is not loaded ' + exceptionData);
			}

		},

		initCanvas : function() {
			var canvas = $('#wheel #canvas').get(0);
			var start_button = $('#wheel #start_button').get(0);
	
			if ($.browser.msie) {
				canvas = document.createElement('canvas');
				satrt_button = document.createElement('satrt_button');
				$(canvas).attr('width', 1000).attr('height', 600).attr('id', 'canvas').appendTo('.wheel');
				$(satrt_button).attr('id', 'start_button').appendTo('.wheel');
				canvas = G_vmlCanvasManager.initElement(canvas);
				satrt_button = G_vmlCanvasManager.initElement(satrt_button);
			}
	
			start_button.addEventListener("click", wheel.spin, false);
			canvas.addEventListener("click", wheel.spin, false);
			wheel.canvasContext = canvas.getContext("2d");
		},

		initWheel : function() {
			shuffle(wheel.colors);
		},

		// Called when segments have changed
		update : function() {
			// Ensure we start mid way on a item
			//var r = Math.floor(Math.random() * wheel.segments.length);
			var r = 0;
			wheel.angleCurrent = ((r + 0.5) / wheel.segments.length) * Math.PI * 2;

			var segments = wheel.segments;
			var len      = segments.length;
			var colors   = wheel.colors;
			var colorLen = colors.length;

			// Generate a color cache (so we have consistant coloring)
			var seg_color = new Array();
			for (var i = 0; i < len; i++){
				seg_color.push( colors[i]);
			}

			wheel.seg_color = seg_color;

			wheel.draw();
		},

		draw : function() {
			wheel.clear();
			wheel.drawWheel();
			wheel.drawNeedle();
		},

		clear : function() {
			var ctx = wheel.canvasContext;
			ctx.clearRect(0, 0, 1000, 800);
		},

		drawNeedle : function() {
			var ctx = wheel.canvasContext;
			var centerX = wheel.centerX;
			var centerY = wheel.centerY;
			var size = wheel.size;

			ctx.lineWidth = 1;
			ctx.strokeStyle = '#000000';
			ctx.fileStyle = '#ffffff';

			ctx.beginPath();

			ctx.moveTo(centerX + size - 40, centerY);
			ctx.lineTo(centerX + size + 20, centerY - 10);
			ctx.lineTo(centerX + size + 20, centerY + 10);
			ctx.closePath();

			ctx.stroke();
			ctx.fill();
			
			// Which segment is being pointed to?
			var i = wheel.segments.length - Math.floor((wheel.angleCurrent / (Math.PI * 2))	* wheel.segments.length) - 1;
			// Now draw the winning name
			ctx.textAlign = "left";
			ctx.textBaseline = "middle";
			ctx.fillStyle = '#000000';
			ctx.font = "2em Cafe24Ssurround";
			ctx.fillText(wheel.segments[i], centerX + size + 25, centerY);
			
		},

		food : function(){
			var ctx = wheel.canvasContext;

			var i = wheel.segments.length - Math.floor((wheel.angleCurrent / (Math.PI * 2))	* wheel.segments.length) - 1;
			console.log(i);
			return i;
		},

		drawSegment : function(key, lastAngle, angle) {
			var ctx = wheel.canvasContext;
			var centerX = wheel.centerX;
			var centerY = wheel.centerY;
			var size = wheel.size;

			var segments = wheel.segments;
			var len = wheel.segments.length;
			var colors = wheel.seg_color;

			var value = segments[key];
			
			ctx.save();
			ctx.beginPath();

			// Start in the centre
			ctx.moveTo(centerX, centerY);
			ctx.arc(centerX, centerY, size, lastAngle, angle, false); // Draw a arc around the edge
			ctx.lineTo(centerX, centerY); // Now draw a line back to the centre

			// Clip anything that follows to this area
			//ctx.clip(); // It would be best to clip, but we can double performance without it
			ctx.closePath();

			ctx.fillStyle = colors[key];
			ctx.fill();
			ctx.stroke();

			// Now draw the text
			ctx.save(); // The save ensures this works on Android devices
			ctx.translate(centerX, centerY);
			ctx.rotate((lastAngle + angle) / 2);

			ctx.fillStyle = '#000000';
			ctx.fillText(value.substr(0, 20), size / 2 + 20, 0);
			ctx.restore();

			ctx.restore();
		},

		drawWheel : function() {
			var ctx = wheel.canvasContext;

			var angleCurrent = wheel.angleCurrent;
			var lastAngle    = angleCurrent;

			var segments  = wheel.segments;
			var len       = wheel.segments.length;
			var colors    = wheel.colors;
			var colorsLen = wheel.colors.length;

			var centerX = wheel.centerX;
			var centerY = wheel.centerY;
			var size    = wheel.size;

			var PI2 = Math.PI * 2;

			ctx.lineWidth    = 1;
			// 원테두리 두께 변경하는 곳 #000000 변경
			ctx.strokeStyle  = '#ffaa00';
			ctx.textBaseline = "middle";
			ctx.textAlign    = "center";
			ctx.font         = "1.4em Cafe24Ssurround";

			for (var i = 1; i <= len; i++) {
				var angle = PI2 * (i / len) + angleCurrent;
				wheel.drawSegment(i - 1, lastAngle, angle);
				lastAngle = angle;
			}
			// Draw a center circle
			ctx.beginPath();
			ctx.arc(centerX, centerY, 20, 0, PI2, false);
			ctx.closePath();

			ctx.fillStyle   = '#ffffff';
			// 원테두리 두께 변경하는 곳 #000000 변경
			ctx.strokeStyle = '#ffaa00';
			ctx.fill();
			ctx.stroke();

			// Draw outer circle
			ctx.beginPath();
			ctx.arc(centerX, centerY, size, 0, PI2, false);
			ctx.closePath();

			// 원테두리 두께 변경하는 곳 ctx.lineWidth 값 변경
			ctx.lineWidth   = 5;
			// 원테두리 두께 변경하는 곳 #000000 변경
			ctx.strokeStyle = '#ffaa00';
			ctx.stroke();
		},
	}

	window.onload = function() {
		wheel.init();

		var segments = new Array();
		$.each($('#venues input:checked'), function(key, cbox) {
			segments.push( cbox.value );
		});

		wheel.segments = segments;
		wheel.update();

		// Hide the address bar (for mobile devices)!
		setTimeout(function() {
			window.scrollTo(0, 1);
		}, 0);
	}