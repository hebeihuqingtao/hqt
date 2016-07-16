$(document).delegate('#del','click',function(){
    var w_id = $(this).attr('wid');
    _this=$(this).parents('tr');
    $.get("index.php?r=index/del_w",{w_id:w_id},function(msg){
        if(msg==1){
            _this.remove();
        }else{
            alert('删除失败');
        }
    });

})
