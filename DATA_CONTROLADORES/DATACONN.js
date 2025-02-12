<script>
function connKDP(){
$.ajax({url:"conPKD.php", success:function(result){
$("div").text(result);}
})
}
</script>