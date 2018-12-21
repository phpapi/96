
function exchange(qhan,qhshow,qhon){
    $(qhan).hover(function(){
        $(qhan).removeClass(qhon);
        $(this).addClass(qhon);
        var i = $(this).index(qhan);
        $(qhshow).eq(i).show().siblings(qhshow).hide();
    });
}
exchange(".yuleSortBtn dd",".yuleHji","cur");
