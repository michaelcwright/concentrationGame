

<script type="text/javascript">

var addElement = "";
var textNode = "";


var pickedCard = 0;
var timePicked = 0;
var firstPicked = 0;
var secondPicked = 0;
var cardValue1 = new Array();
var firstCard = "";
var secondCard = "";
var cardx = "";
var goodTg = 0;

var score = 0;
var val = "";
var val2 = "";
var log ="";

function loaderz(){


}

function schemes(){
		var p = (Math.floor(Math.random() * 6)) + 1;

		switch(p)
		{
			case 1:
			cardValue1 = ['0','11','2','7','9','12','3','5','1','6','8','1','10','9','2','10','4','12','3','4','5','6','8','11','7'];
			break;
			
			case 2:
			cardValue1 = ['0','2','9','4','1','12','3','4','2','5','6','8','11','7','11','12','3','5','1','7','6','8','10','9','10'];
			break;
			
			case 3:
			cardValue1 = ['0','9','1','10','12','8','7','11','3','2','5','12','4','3','1','6','8','10','7','9','11','4','2','5','6'];
			break;
			
			case 4:
			cardValue1 = ['0','10','12','5','1','12','4','3','1','6','9','8','2','5','6','4','2','8','7','11','3','10','7','9','11'];
			break;
			
			case 5:
			cardValue1 = ['0','6','4','5','1','10','3','10','5','4','2','8','7','11','12','3','12','1','6','9','8','2','7','11','9'];
			break;
			
			case 6:
			cardValue1 = ['0','10','12','5','2','8','7','7','11','11','9','3','3','12','1','9','5','1','4','10','6','8','4','6','2'];
			break;

		}
	}
function firstZ(){

		schemes();
		document.getElementById('lookT').innerHTML = "<p>Look at the numbers and try to memorize them</p>";
		document.getElementById("readyButton").disabled = true;	

		for(var i = 1 ; i < cardValue1.length ; i++)
		{
			document.getElementById('card'+i).innerHTML = cardValue1[i];
		}
		
		
		var timerX = setTimeout(function(){
	    document.getElementById('lookT').innerHTML = "<p>Concentrate and try to match the cards</p>";
		for(var i = 1 ; i < cardValue1.length ; i++)
			{
				document.getElementById('card'+i).innerHTML = "";
			}
		},8000);
		goodTg = 1;
		document.getElementById('score').innerHTML = ("Score : 0 ");
}




function changeZ(x){
	document.getElementById('card'+x).innerHTML = cardx;
}

function checkIn(x){

	if (goodTg == 1)
	{
		clickCard(x);
	}
}



function clickCard(x){
	timePicked++;


	if (timePicked == 1)
	{
		firstPicked = x;
		firstCard = cardValue1[x];
		cardx = cardValue1[x];
	}




	if (timePicked == 3)
	{

		var thevalue1 = document.getElementById('card'+x).innerHTML;
		var checkNumber = parseInt(thevalue1);

		if (thevalue1 == checkNumber)
		{
			--timePicked;
			return;
		}
	
		secondPicked = x;
		secondCard = cardValue1[x];
		cardx = cardValue1[x];

	}

if (timePicked < 4)
{
	switch(x)
	{
		case 1:
		changeZ(1);
		timePicked++;
		if(timePicked == 4)
			{	
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";	
					timePicked = 0;
				}
			}
		break;
	
		case 2:
		changeZ(2);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";	
					timePicked = 0;
				}
			}
		break;
		
		case 3:
		changeZ(3);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";	
					timePicked = 0;
				}
			}
		break;
		
		case 4:
		changeZ(4);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";
					timePicked = 0;
				}
			}
		break;
		
		case 5:
		changeZ(5);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";
					timePicked = 0;
				}
			}
		break;
		
		case 6:
		changeZ(6);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";
					timePicked = 0;
				}
			}
		break;
		
		case 7:
		changeZ(7);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";
					timePicked = 0;
				}
			}
		break;
		
		case 8:
		changeZ(8);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";	
					timePicked = 0;
				}
			}
		break;
		
		case 9:
		changeZ(9);
		timePicked++;
		if(timePicked == 4)
			{	
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";
					timePicked = 0;
				}
			}
		break;
	
		case 10:
		changeZ(10);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";
					timePicked = 0;
				}
			}
		break;
		
		case 11:
		changeZ(11);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";	
					timePicked = 0;
				}
			}
		break;
		
		case 12:
		changeZ(12);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";	
					timePicked = 0;
				}
			}
		break;
		
		case 13:
		changeZ(13);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";
					timePicked = 0;
				}
			}
		break;
		
		case 14:
		changeZ(14);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";	
					timePicked = 0;
				}
			}
		break;
		
		case 15:
		changeZ(15);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";
					timePicked = 0;
				}
			}
		break;
		
		case 16:
		changeZ(16);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";
					timePicked = 0;
				}
			}
		break;
		
		case 17:
		changeZ(17);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";
					timePicked = 0;
				}
			}
		break;
		
		case 18:
		changeZ(18);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";
					timePicked = 0;
				}
			}
		break;
		
		case 19:
		changeZ(19);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";
					timePicked = 0;
				}
			}
		break;
		
		case 20:
		changeZ(20);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";
					timePicked = 0;
				}
			}
		break;
		
		case 21:
		changeZ(21);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";
					timePicked = 0;
				}
			}
		break;
		
		case 22:
		changeZ(22);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";
					timePicked = 0;
				}
			}
		break;
		
		case 23:
		changeZ(23);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";
					timePicked = 0;
				}
			}
		break;
		
		case 24:
		changeZ(24);
		timePicked++;
		if(timePicked == 4)
			{
				if (firstCard == secondCard)
				{
					++score;
					if(score == 12)
					{
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						document.getElementById('score').innerHTML = ("Congratulations! You've matched all letters");
						document.getElementById("readyButton").disabled = false;	
						document.getElementById('buttonR').innerHTML =("<input type='button' value='Play Again!' onClick='document.location.reload(true)'>");
					}
					if(score < 12)
					{
						document.getElementById('score').innerHTML = ("Score : " + score);
						document.getElementById('card'+firstPicked).innerHTML = firstCard + " (Matched)";
						document.getElementById('card'+secondPicked).innerHTML = secondCard + " (Matched)";
						document.getElementById('toclick'+firstPicked).removeAttribute("onclick");
						document.getElementById('toclick'+secondPicked).removeAttribute("onclick");
						timePicked = 0;
					}
				}
				if(firstCard != secondCard)
				{
					document.getElementById('card'+firstPicked).innerHTML = "";
					document.getElementById('card'+secondPicked).innerHTML = "";
					timePicked = 0;
				}
			}
		break;
	}
	
}


}




</script>

<div class="bodytopG">
	<div class="bodytopadjG">
		<p><h1>Concentration Game</h1></p>
		<br />
		<p>You have 8 seconds to memorize the cards. Then use your memory to match the numbers!</p>
		<br />
		<hr />
	</div>
</div>


<div class="containerx">
<div class="bodylowj">

<br />
<p><input type="button" id="readyButton" class="btn btn-default" value="I'm ready!" onClick="firstZ()"></p>


<div id="table">

<div id="lookT"></div>

<table>
<tr>
<td><div id="toclick1" onclick="checkIn(1)"><div id="blockz"></div><div id="card1"></div></div></td>	
<td><div id="toclick2" onclick="checkIn(2)"><div id="blockz"></div><div id="card2"></div></div></td>	
<td><div id="toclick3" onclick="checkIn(3)"><div id="blockz"></div><div id="card3"></div></div></td>
<td><div id="toclick4" onclick="checkIn(4)"><div id="blockz"></div><div id="card4"></div></div></td>
<td><div id="toclick21" onclick="checkIn(21)"><div id="blockz"></div><div id="card21"></div></div></td>	
<td><div id="toclick17" onclick="checkIn(17)"><div id="blockz"></div><div id="card17"></div></div></td>	
</tr>


<tr>
<td><div id="toclick18" onclick="checkIn(18)"><div id="blockz"></div><div id="card18"></div></div></td>	
<td><div id="toclick22" onclick="checkIn(22)"><div id="blockz"></div><div id="card22"></div></div></td>	
<td><div id="toclick5" onclick="checkIn(5)"><div id="blockz"></div><div id="card5"></div></div></td>	
<td><div id="toclick6" onclick="checkIn(6)"><div id="blockz"></div><div id="card6"></div></div></td>	
<td><div id="toclick7" onclick="checkIn(7)"><div id="blockz"></div><div id="card7"></div></div></td>	
<td><div id="toclick8" onclick="checkIn(8)"><div id="blockz"></div><div id="card8"></div></div></td>	
</tr>

<tr>
<td><div id="toclick19" onclick="checkIn(19)"><div id="blockz"></div><div id="card19"></div></div></td>	
<td><div id="toclick23" onclick="checkIn(23)"><div id="blockz"></div><div id="card23"></div></div></td>
<td><div id="toclick9" onclick="checkIn(9)"><div id="blockz"></div><div id="card9"></div></div></td>	
<td><div id="toclick10" onclick="checkIn(10)"><div id="blockz"></div><div id="card10"></div></div></td>	
<td><div id="toclick11" onclick="checkIn(11)"><div id="blockz"></div><div id="card11"></div></div></td>	
<td><div id="toclick12" onclick="checkIn(12)"><div id="blockz"></div><div id="card12"></div></div></td>	

</tr>

<tr>
<td><div id="toclick20" onclick="checkIn(20)"><div id="blockz"></div><div id="card20"></div></div></td>	
<td><div id="toclick24" onclick="checkIn(24)"><div id="blockz"></div><div id="card24"></div></div></td>	
<td><div id="toclick13" onclick="checkIn(13)"><div id="blockz"></div><div id="card13"></div></div></td>	
<td><div id="toclick14" onclick="checkIn(14)"><div id="blockz"></div><div id="card14"></div></div></td>	
<td><div id="toclick15" onclick="checkIn(15)"><div id="blockz"></div><div id="card15"></div></div></td>	
<td><div id="toclick16" onclick="checkIn(16)"><div id="blockz"></div><div id="card16"></div></div></td>	
</tr>

</table>

<p><div id="scoreDiv2"><div id="score"></div></div></p>

<p><div id="buttonR"><input type="button" value="Reload" onClick="document.location.reload(true)"></div></p>


</div>



</div>
</div>







