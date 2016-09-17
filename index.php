<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>PHPの課題</title>
</head>

<body>
	<div id="header">
		<h1>CoderDojo Kashiwa PHPの課題</h1>
		<p>目標：PHPの基本構文をマスターする！</p>
		<p>課題：以下の指示に従って、index.phpを書きなおそう</p>
	</div>

	<hr>

	<div id="q1">
		<h2>問題１</h2>
		<p>PHPを使ってこの下に"Hello, World!"と表示させよう。</p>
		<?php
			//ここにPHPのソースコードを書く
		?>
	</div>

	<div id="q2">
		<h2>問題2</h2>
		<p>下に書いてあるPHPのソースコードをコメントアウトしてみよう</p>
		<?php
			echo "この一文をコメントアウト！";
		?>
	</div>

	<div id="q3">
		<h2>問題3</h2>
		<p>下に書いてあるPHPのソースコードを全てコメントアウトしてみよう。ただし、//は使用禁止！</p>
		<?php
			echo "ここからさきの";
			echo "ソースコードを";
			echo "すべてコメントアウト！";
		?>
	</div>

	<div id="q4">
		<h2>問題4</h2>
		<p>HTMLのpタグの中に"こんにちは！"とPHPのechoを使って表示させよう。</p>
		<p><!-- このコメントを消して、ここのPHPを書く --></p>
	</div>

	<div id="q5">
		<h2>問題5</h2>
		<p>messageという名前の変数に、"こんにちは！"という文字列を格納して、さらにそれをechoしてみよう</p>
		<?php

		?>
	</div>

	<div id="q6">
		<h2>問題6</h2>
		<p>以下の条件にあった変数を作ってみよう</p>
		<ul>
			<li>変数名str、値"こんにちは"という文字列型の変数</li>
			<li>変数名int、値10の整数値型の変数</li>
			<li>変数名float、値3.14の小数値型の変数</li>
			<li>変数名bool、値trueの真偽値型変数</li>
			<li>変数名null、値nullの変数</li>
		</ul>

		<?php

		?>
	</div>

	<div id="q7">
		<h2>問題7</h2>
		<p>USER_IDという名前の定数を作って自分の名前を格納し、echoさせてみよう</p>
		<?php

		?>
	</div>

	<div id="q8">
		<h2>問題8</h2>
		<p>以下の計算をしてみよう</p>
		<?php
			$a = 10;
			$b = 20;
			$c = 3;

			$e = "CoderDojo";
			$f = "Kashiwa";

			//全てechoすること！

			//a+b

			//b-c

			//c×a

			//a÷b

			//b÷cのあまり

			//eとfを連結させてecho
		?>
	</div>

	<div id="q9">
		<h2>問題9</h2>
		<?php
			//以下のソースコードの誤りを見つけて修正しよう
			$name = "Kirie Miyajima";
			echo 'こんにちは、$name さん';
		?>
	</div>

	<div id="q10">
		<h2>問題10</h2>
		<p>if文を使ってみよう</p>
		<?php
			$big = 100;
			$small = 10;

			//下に、if文をつかって、「もし$bigが$smallより大きかったら、"bigはsmallより大きい！"とechoする」というコードを書いてみよう

		?>
	</div>

	<div id="q11">
		<h2>問題11</h2>
		<p>switch文を使ってみよう </p>
		<?php
			$randam = rand(0,2);	//0から3までの乱数を発生させる。

			/*== 
				Switch文を使って、以下の様な条件分岐をしてみよう
				$randam == 0 -> "赤"とprint
				$randam == 1 -> "青"とprint
				$randam == 2 -> "緑"とprint
			==*/

		?>
	</div>

	<div id="q12">
		<h2>問題12</h2>
		<p>While文を使って0から20までの数字をprintしてみよう</p>
		<?php
			//while文を使って20まで数字をprintしてみよう。
			//ヒントはwhile文の中で$iをどうするのか！

			$i = 0;
			
		?>

	</div>

	<div id="q13">
		<h2>問題13</h2>
		<p>for文を使って0から20までの数字をprintしてみよう</p>
		<?php
			//ヒント：while文との違いを考えてみよう。
		?>
	</div>

	<div id="q14">
		<h2>問題14</h2>
		<p>配列を作ろう</p>
		<?php
			//自分が学校で習っている教科をsubject配列にいれてみよう。
			$subject;
		?>
	</div>

	<div id="q15">
		<h2>問題15</h2>
		<p>foreachを使って配列の中身を表示してみよう</p>
		<ul>
			<?php
				//<li></li>タグの中に表示させてみよう
			?>
		</ul>
	</div>

	<div id="q16">
		<h2>問題16</h2>
		<p>関数を実行させよう。</p>

		<?php
			function myFunction(){
				print("Hello, World!");
			}
		?>
	</div>

	<div id="q17">
		<h2>問題17</h2>
		<p>関数を作ってみよう</p>
		<?php
			//自分の名前を吐き出す関数を作って、それを実行してみよう。
		?>
	</div>

	<div id="q18">
		<h2>問題18</h2>
		<p>関数に引数をセットしてみよう</p>
		<?php
			function printMyName($name){
				print("こんにちは、".$name."さん");
			}

			printMyName();
		

		?>
	</div>

	<div id="q19">
		<h2>問題19</h2>
		<p>引数をつかった関数を作ってみよう</p>
		<?php

		?>
	</div>
</body>
</html>