
<?php dpm($fields);?>
<?php if($fields["title"]->content){  ?>
<div>
	<?php if($fields["body"]->content==""){  ?>
	  <?php print $fields["title"]->content; ?>
	  <?php }?>
</div>
<?php } else {
echo "no content";

}?>