<?php
$cards = [
    ['suit'=>'heart', 'number'=>12],
    ['suit'=>'heart', 'number'=>1],
    ['suit'=>'heart', 'number'=>13],
    ['suit'=>'heart', 'number'=>11],
    ['suit'=>'heart', 'number'=>2],
];

function judge($cards) {
    // この関数内に処理を記述
$tranp; $result;
foreach($cards as $key => $card){
$tranp[$key][0]= $card['suit'];
$tranp[$key][1]= $card['number'];}

    // カードの不正チェック
$judge1; $judge2;
for($i=0;$i<5;$i++){
	$suit=$tranp[$i][0]; $card=$tranp[$i][1];
	if($suit=='heart'){
	if($card>0 && $card<=13){$judge1=1;}else{$judge1=0; break;}}
	else if($suit=='spade'){
	if($card>0 && $card<=13){$judge1=1;}else{$judge1=0; break;}}
	else if($suit=='diamond'){
	if($card>0 && $card<=13){$judge1=1;}else{$judge1=0; break;}}
	else if($suit=='club'){
	if($card>0 && $card<=13){$judge1=1;}else{$judge1=0; break;}}
	else if($suit=='joker' && $card==0){$judge1=1;}
	else{$judge1=0; break;}
}

for($i=0;$i<5;$i++){
for($j=$i+1;$j<5;$j++){
	if($tranp[$i][0]==$tranp[$j][0] &&
	$tranp[$i][1]==$tranp[$j][1]){$judge2=0; break;}
	else if($tranp[$i][0]!=$tranp[$j][0] ||
	$tranp[$i][1]!=$tranp[$j][1]){$judge2=1;}
}}

if($judge1==1 && $judge2==1){

    // カードの並び替え
for($i=0;$i<5;$i++){ for($j=0;$j<4;$j++){
$Mai=$tranp[$j][1]; $sub=$tranp[$j+1][1];
$MaiS=$tranp[$j][0]; $subS=$tranp[$j+1][0];
if($Mai > $sub){
	$tranp[$j][0]=$subS;	$tranp[$j][1]=$sub;
	$tranp[$j+1][0]=$MaiS;	$tranp[$j+1][1]=$Mai;}
else if(($Mai < $sub)||($Mai == $sub)){
	$tranp[$j][0]=$MaiS;	$tranp[$j][1]=$Mai;
	$tranp[$j+1][0]=$subS;	$tranp[$j+1][1]=$sub;
	$Mai=$sub; $MaiS=$subS;}
}}

    // 役判定
$p=[0,0,0,0,0,0,0,0,0,0,0,0,0,0]; $pair=0;
for($i=0;$i<5;$i++){$n=$tranp[$i][1]; $p[$n]++;}
if($p[0]==1){
for($i=1;$i<=13;$i++){
if($p[1]==1 && $p[10]==1 && $p[11]==1 && $p[12]==1 ||
   $p[1]==1 && $p[10]==1 && $p[11]==1 && $p[13]==1 ||
   $p[1]==1 && $p[10]==1 && $p[12]==1 && $p[13]==1 ||
   $p[1]==1 && $p[11]==1 && $p[12]==1 && $p[13]==1 ||
   $p[10]==1 && $p[11]==1 && $p[12]==1 && $p[13]==1)
	{$pair=10;break;}//ロイヤルストレート
if($i<=9){
if($p[$i]==1 && $p[$i+1]==1 && $p[$i+2]==1 && $p[$i+3]==1 ||
   $p[$i]==1 && $p[$i+1]==1 && $p[$i+2]==1 && $p[$i+4]==1 ||
   $p[$i]==1 && $p[$i+1]==1 && $p[$i+3]==1 && $p[$i+4]==1 ||
   $p[$i]==1 && $p[$i+2]==1 && $p[$i+3]==1 && $p[$i+4]==1)
	{$pair=4;break;}}//ストレート
if($p[$i]==1){
for($j=$i+1;$j<=13;$j++){
	if($p[$j]==1){ for($k=$j+1;$k<=13;$k++){
		if($p[$k]==1){$pair=1; break;}//ワンペア
		if($p[$k]==2){$pair=3; break;}//スリーカード
	}}
	if($p[$j]==2){$pair=3; break;}//スリーカード
	if($p[$j]==3){$pair=7; break;}}}//フォーカード
if($p[$i]==2){
	for($j=$i+1;$j<=13;$j++){
	if($p[$j]==2){$pair=6; break;}//フルハウス
	else if($p[$j]==1){$pair=3; break;}}}//スリーカード
if($p[$i]==3){$pair=7; break;}//フォーカード
if($p[$i]==4){$pair=8; break;}//ファイブカード
}}else if($p[0]==0){
for($i=1;$i<=13;$i++){
if($p[1]==1 && $p[10]==1 && $p[11]==1 && $p[12]==1 && $p[13]==1)
{$pair=10;break;}//ロイヤルストレート
if($i<=9){
if($p[$i]==1 && $p[$i+1]==1 && $p[$i+2]==1 &&
	 $p[$i+3]==1 && $p[$i+4]==1){$pair=4;break;}}//ストレート
if($p[$i]==1){
for($j=$i+1;$j<=13;$j++){
	if($p[$j]==1){ for($k=$j+1;$k<=13;$k++){
		if($p[$k]==1){
		for($l=$k+1;$l<=13;$l++){
		if($p[$l]==2){$pair=1; break;}//ワンペア
		else if($p[$l]==1){$pair=0;break;}}}//ノーペア
		if($p[$k]==2){$pair=1; break;}//ワンペア
		if($p[$k]==3){$pair=3; break;}//スリーカード
	}}
	if($p[$j]==2){
		for($k=$j+1;$k<=13;$k++){
		if($p[$k]==2){$pair=2; break;}//ツーペア
		else if($p[$k]==1){$pair=1; break;}}}//ワンペア
	if($p[$j]==3){
	for($k=$j+1;$k<=13;$k++){$pair=3; break;}}//スリーカード
	if($p[$j]==4){$pair=7; break;}//フォーカード
	}}
if($p[$i]==2){
	for($j=$i+1;$j<=13;$j++){
	if($p[$j]==3){$pair=6; break;}//フルハウス
	else if($p[$j]==2){$pair=2; break;}//ツーペア
	else if($p[$j]==1){
	for($k=$j+1;$k<=13;$k++){
	if($p[$k]==2){$pair=2; break;}//ツーペア
	else if($p[$k]==1){$pair=1; break;}}}//ワンペア
	}}
if($p[$i]==3){
	for($j=$i+1;$j<=13;$j++){
	if($p[$j]==2){$pair=6; break;}//フルハウス
	else if($p[$j]==1){$pair=3; break;}}}//スリーカード
if($p[$i]==4){$pair=7; break;}//フォーカード
}}

$h=0; $s=0; $d=0; $c=0; $much;
for($i=0;$i<5;$i++){
	if($tranp[$i][0]=='joker'){$h++; $s++; $d++; $c++;}
	else if($tranp[$i][0]=='heart'){$h++;}
	else if($tranp[$i][0]=='spade'){$s++;}
	else if($tranp[$i][0]=='diamond'){$d++;}
	else if($tranp[$i][0]=='club'){$c++;}
}
if($h==5 || $s==5 || $d==5 || $c==5){$much=5;}
else if($h<5 && $s<5 && $d<5 && $c<5){$much=0;}

for($i=0;$i==0;$i++){
	if($pair==10 && $much==5)
		   {$gas="ロイヤルストレートフラッシュ"; break;}
	else if($pair==10)
		   {$gas="ストレート"; break;}
	else if($pair==4 && $much==5)
		   {$gas="ストレートフラッシュ"; break;}
	else if($pair==8){$result="ファイブカード"; break;}
	else if($pair==7){$result="フォーカード"; break;}
	else if($pair==6){$result="フルハウス"; break;}
	else if($much==5){$result="フラッシュ"; break;}
	else if($pair==4){$result="ストレート"; break;}
	else if($pair==3){$result="スリーカード"; break;}
	else if($pair==2){$result="ツーペア"; break;}
	else if($pair==1){$result="ワンペア"; break;}
	else if($pair==0){$result="なし";break;}
}
}else if($judge1==0 || $judge2==0){$result=0;}

if($result==0){echo ("手札が不正です。");}
else{echo ("役は"),$result,("です。");}
}

judge($cards);

?>