<?php
$vote = $_REQUEST['vote'];
$insertvote = "";
//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);
//put content in array
$array = explode("-", $content[0]);

foreach ($array as $key => $value) {
	${'choix'.$key} = $array[$key];

	if($vote == "choix".$key) 
	{
		${'choix'.$key} += 1;
	}
	$total = count($array);
	if ($key == count($array)-1){
		$insertvote .= ${'choix'.$key};
	}else{
		$insertvote .= ${'choix'.$key}."-";
	}
	$total_votes += $value;
}


// The path to the FTP file, including login arguments
$ftp_path = '/home/forge/weavent.ml/poll_vote.php';

// Allows overwriting of existing files on the remote FTP server
$stream_options = array('ftp' => array('overwrite' => true));

// Creates a stream context resource with the defined options
$stream_context = stream_context_create($stream_options);

// Opens the file for writing and truncates it to zero length
if ($fp = fopen($ftp_path, 'w', 0, $stream_context))
{
    // Writes contents to the file
	fputs($fp, $insertvote);

    // Closes the file handle
	fclose($fp);
}
else
{
	die('Could not open the file. check $ftp path');
}
    // uncomment si en local
    // $fp = fopen($filename,"w");
    // fputs($fp,$insertvote);
    // fclose($fp);
$updated_content = file($filename);
$updated_array = explode("-", $updated_content[0]);
?>

<table>
	<?php
	$total_votes += 1;
	foreach ($updated_array as $key => $value) {
		?>
		<tr>
			<td><?= $key +1; ?> :</td>
			<td>
				<img src="https://dummyimage.com/100x20/a8287b.gif&text=+"
				width="<?php echo(100*round(intval($value)/($total_votes), 2)); ?>"
				height='20'>
				<?php echo(100*round(intval($value)/($total_votes), 2)); ?>%
			</td>
		</tr>
		<?php } ?>
	</table>