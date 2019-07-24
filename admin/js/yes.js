
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure you want to delete ???')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});