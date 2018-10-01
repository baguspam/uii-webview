<script type="text/javascript" src="<?php echo "$link";?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo "$link";?>assets/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo "$link";?>assets/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo "$link";?>assets/js/jquery.swipebox.min.js"></script>
<script type="text/javascript" src="<?php echo "$link";?>assets/js/custom.js"></script>

<!-- Custom JS -->
<?php 
if($_GET['m']=='about'||$_GET['m']=='panduan'){
?>
<script type="text/javascript" src="<?php echo "$link";?>assets/js/ckeditor.js"></script>
<script type="text/javascript">
	ClassicEditor.create( document.querySelector( '#editor' ), {
        removePlugins: [ 'Heading', 'Link' ],
        toolbar: [ 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote', 'alignment']
    } )
    .catch( error => {
        console.log( error );
    } );
</script>
<?php }else{}?>
