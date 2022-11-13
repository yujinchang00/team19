<script> 
function openPop() {
    document.getElementById("popup_layer").style.display = "block";

}

//팝업 닫기
function closePop() {
    document.getElementById("popup_layer").style.display = "none";
}
</script> 
<a href="javascript:openPop()"> 
    <div>
        팝업오픈!
    </div>
</a>

<div class="community_edit">
            <form action="" method="POST" id="eventForm">
            <button class="btn_close" type="close">X</button>
            <br> 
            <input id='communityInput' type="text" name="input_event" placeholder="Edit your comment">
            <input id='communitySubmit' type="submit" value="EDIT" >
         </div>
<style>
    .community_edit{
        background-color: #F0F0F0;
        width: 400px;
    }
    #communityInput{
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-style: italic;
    font-size: 15px;
    width: 360px;
    height: 40px;
    border-radius: 5px;
    }
    #communitySubmit{
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-style: italic;
    font-size: 24px;
    width: 172px;
    height: 40px;
    background-color:#00462A ;
    color: white;
    border-radius: 5px;
    }
    .btn_close{
        background-color:#F0F0F0;
        float: right;

    }
</style>         