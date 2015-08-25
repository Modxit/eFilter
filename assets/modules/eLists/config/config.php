<?php
if(!defined('MODX_BASE_PATH')){die('What are you doing? Get out of here!');}

//List of available shapes
$formListTpl='
	<table class="fl">
		<thead>
			<tr>
				<td>id</td>
				<td>Nome</td>
				<td>Descrizione (copiare in "Opzioni valori di input" della relativa TV)</td>
				<td>Valore</td>
				<td>Modifica</td>
				<td>Rimuovi</td>
			</tr>
		</thead>
		<tbody>
			[+formRows+]
		</tbody>
	</table>
	<br><br>
	<!--Form to create a new form-->
	<form action="" method="post" class="actionButtons">
		<input type="hidden" name="action" value="newForm">
		Nuova opzione: <br><input type="text" value="" name="title"><br>
		<input type="submit" value="Aggiungi opzione">
	</form>
';

//line forms in table form a list
$formRowTpl='
	<tr>
		<td>[+id+]</td>
		<td><b>[+title+]</b></td>
		<td>[+code+]</td>
		<td class="actionButtons"><a href="[+moduleurl+]&fid=[+id+]&action=pole" class="button choice"> <img src="[+iconfolder+]page_white_copy.png" alt=""> La lista dei valori</a></td>
		<td class="actionButtons"><a href="[+moduleurl+]&fid=[+id+]&action=edit" class="button edit"> <img alt="" src="[+iconfolder+]page_white_magnify.png" > Modifica</a></td>
		<td class="actionButtons"><a onclick="document.delform.delform1.value=[+id+];document.delform.submit();" style="cursor:pointer;" class="button delete"> <img src="[+iconfolder+]delete.png" alt=""> Rimuovi</a></td>
	</tr>
';

$formEditTpl='
	<form action="" method="post" class="actionButtons">
		<input type="hidden" name="action" value="updateForm">
	parameter: <br><input type="text" value=\'[+title+]\' name="title" size="50"><br>
		<input type="submit" value="mantieni">
	</form><br><br>
	<a href="[+moduleurl+]">Torna alla lista dei parametri</a>
';

$fieldListTpl='
	<form id="sortpole" action="" method="post" class="actionButtons">
		<table class="fl">
			<thead>
				<tr>
					<td>Valore</td>
					<td>Ordine</td>
					<td>Modifica</td>
					<td>Rimuovi</td>
				</tr>
			</thead>
			<tbody>
				[+fieldRows+]
			</tbody>
		</table>
		<br>
		<input type="submit" value="Salva ordinamento">
	</form>
	<br><br>
	<h2>Aggiungi un nuovo valore</h2>
	<form action="" method="post" class="actionButtons">
		<input type="hidden" name="action" value="newField">
		title <br><input type="text" value="" name="title"><br>
		<input type="submit" value="aggiungi valore">
	</form>
	<br><br>
	<a href="[+moduleurl+]">Torna alla lista dei parametri</a>
';

$fieldRowTpl='
		<tr>
			<td>[+title+]</td>
			<td><input type="text" name="sortpole[[+id+]]" value="[+sort+]" class="sort small"></td>
			<td> <a href="[+moduleurl+]&fid=[+parent+]&pid=[+id+]&action=pole" class="button edit"><img alt="" src="[+iconfolder+]page_white_magnify.png" > Modifica</a> </td>
			<td> <a onclick="document.delpole.delpole1.value=[+id+];document.delpole.submit();" style="cursor:pointer;" class="button delete"> <img src="[+iconfolder+]delete.png" alt=""> Rimuovi</a> </td>
		</tr>
';

$fieldEditTpl='
	<form action="" method="post" class="actionButtons">
		<input type="hidden" name="action" value="updateField">
		value: <br><input type="text" value=\'[+title+]\' name="title"><br>
		<input type="submit" value="Salva cambiamenti">
	</form>
	<br><br>
	<a href="[+moduleurl+]&fid=[+parent+]&action=pole">Torna alla lista dei valori</a>
';








?>