<?php
/*
 * 投资比例按资金30%,技术70%的方式进行分配
*/
include 'lib/common.php';
include 'lib/db.php';
include 'lib/functions.php';
include 'lib/User.php';

/* 从数据库中取得贡献度*/
$jun = User::getScoreByUsername("licaijun");
$an = User::getScoreByUsername("linzhian");
$hua = User::getScoreByUsername("zengjianhua");


$stytle = $_GET['stytle'];

require_once 'SVGgraph/SVGGraph.php';

$junscore = $jun->score1 + $jun->score2 + $jun->score3 + $jun->score4;
$huascore = $hua->score1 + $hua->score2 + $hua->score3 + $hua->score4;
$anscore = $an->score1 + $an->score2 + $an->score3 + $an->score4;

$juncash = $jun->cash1 + $jun->cash2 + $jun->cash3 + $jun->cash4;
$huacash = $hua->cash1 + $hua->cash2 + $hua->cash3 + $hua->cash4;
$ancash = $an->cash1 + $an->cash2 + $an->cash3 + $an->cash4;

$totalscore = $junscore + $anscore + $huascore;
$totalcash =  $juncash + $juncash + $juncash;

if($stytle=="'bar'")
{
$settings = array(
  'graph_title' => '总贡献度统计柱状图','graph_title_position' => 'bottom',
  'graph_title_font_weight' => 'bold',
  'back_colour' => '#f5f5dc',  'stroke_colour' => '#f5f5dc',
  'back_stroke_width' => 0, 'back_stroke_colour' => '#f5f5dc',
  'axis_colour' => '#333',  'axis_overlap' => 2,
  'axis_font' => 'Georgia', 'axis_font_size' => 10,
  'grid_colour' => '#666',  'label_colour' => '#000',
  'pad_right' => 20,        'pad_left' => 20,
  'link_base' => '/',       'link_target' => '_top',
  'minimum_grid_spacing' => 20
);



$values = array('jun' => $junscore, 'an' => $anscore, 'hua' => $huascore);
 
$colours = array(array('red','yellow','red','h'), array('blue','cyan','blue','h'));

$links = array('jun' => 'junscore.php', 'an' => 'anscore.php', 'hua' => 'huascore.php');


$graph = new SVGGraph(160, 172, $settings);
$graph->colours = $colours;
 
$graph->Values($values);
$graph->Links($links);
$graph->Render('StackedBarGraph');
}

if($stytle=="'pie'")
{
$settings = array(
  'graph_title' => '股份饼图','graph_title_position' => 'bottom',
  'graph_title_space' => 10,
  'graph_title_font_weight' => 'bold',
  'back_colour' => '#f5f5dc',  'stroke_colour' => '#000',
  'back_stroke_width' => 0, 'back_stroke_colour' => '',
  'axis_colour' => '#333',  'axis_overlap' => 2,
  'axis_font' => 'Georgia', 'axis_font_size' => 10,
  'grid_colour' => '#666',  'label_colour' => '#000',
  'pad_right' => 20,        'pad_left' => 20,
  'link_base' => '/',       'link_target' => '_top',
  'show_labels' => true,    'show_label_amount' => true,
  'label_font' => 'Georgia','label_font_size' => '11',
  'sort' => false,          'units_before_label' => '',
  'units_label' => '%'
);

$junh = ($junscore * 70)/$totalscore + ($juncash * 30)/$totalcash;
$anh = ($anscore * 70)/$totalscore + ($ancash * 30)/$totalcash;
$huah = ($huascore * 70)/$totalscore + ($huacash * 30)/$totalcash;

$values = array('jun' => $junh, 'an' => $anh, 'hua' => $huah);
 
$colours = array('#ccf','#699','#93c','#996','#f39','#0f3','#339');
$links = array('jun' => 'junscore.php', 'an' => 'anscore.php', 'hua' => 'huascore.php');

$graph = new SVGGraph(160, 172, $settings);
$graph->colours = $colours;
 
$graph->Values($values);
$graph->Links($links);
$graph->Render('PieGraph');

}

?>
