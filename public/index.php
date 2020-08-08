<?php


$rows = json_decode(file_get_contents("DataSet.json"), true);
$state = HttpState::create(); // instanceof State, dane powinny zostać pobrane z $_GET
//
//$dataGrid = new HtmlDataGrid(); // instanceof DataGrid
//$config = (new DefaultConfig) // instanceof Config, z dodatkowymi metodami
//    ->addIntColumn('id')
//    ->addTextColumn('name')
//    ->addIntColumn('age')
//    ->addTextColumn('company')
//    ->addCurrencyColumn('balance', 'USD')
//    ->addTextColumn('phone')
//    ->addTextColumn('email');
//
//echo $dataGrid->withConfig($config)->render($rows, $state);


echo '<pre>';
print_r($rows);
echo '<pre>';
