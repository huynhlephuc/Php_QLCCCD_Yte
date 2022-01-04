<div class="Contact">
    <form action="https://docs.google.com/forms/d/e/1FAIpQLSd_hzSKd0HdpeZANSuG8wWn4YukBdoaLHLKtDgTEUry2a5wJQ/formResponse?embedded=true" class="blockform" id="form_dathang" method="POST" onsubmit="return emptycart()" style="display: block;" target="hidden_iframe">
 	<div class="Contact">
   <fieldset>
            <legend><span class="number">1</span> Thông tin công dân</legend>
            <input type="text" name="entry.413622592" placeholder="Họ & Tên *" dir="auto" required="" value="">
            <input type="email" name="entry.1984925734" placeholder="Email *" dir="auto" required="" value="">
            <input type="tel" name="entry.231682893" placeholder="Số điện thoại *" dir="auto" required="" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" value="">
            <label for="subject">Chủ đề:</label>
            <select id="subject" name="entry.438264239" dir="auto" required="" value="">
                <optgroup label="Vấn đề cần hỗ trợ">
                    <option value="Làm sao để biết CMND hay CCCD đã quá hạn?">Làm sao để biết CMND hay CCCD đã quá hạn?</option>
                    <option value="Những ai nên đi đổi sang CCCD mới?">Những ai nên đi đổi sang CCCD mới?</option>
                    <option value="Đổi sang CCCD mới có được giữ lại số CMND trước đó?">Đổi sang CCCD mới có được giữ lại số CMND trước đó?</option>
                </optgroup>
            </select>
        </fieldset>
        <fieldset>
            <legend><span class="number">2</span> Lời nhắn</legend>
            <textarea name="entry.1564473083" placeholder="Lời nhắn" dir="auto" required="" value="" rows="5"></textarea>
        </fieldset>
        <input type="submit" value="Gửi đến Vàng" /> </div></form>
<!-- Code thông báo gửi thành công -->
<div class="hidden-message alert-box success" style="display: none;">Thông tin đã được gửi đến Vàng. Cảm ơn bạn đã ghé thăm website của mình nhé ! </div>
<iframe id="hidden_iframe" name="hidden_iframe" onload="if(submitted){}" style="display: none;"></iframe>
<script type="text/javascript">
    var submitted = false;

    function emptycart() {
        submitted = true;
        $('.blockform').toggle();
        $('.hidden-message').show();
    }
    $("iframe#hidden_iframe").on('load', function() {
        simpleCart.empty();
    });
</script>
<!-- Css Contact -->
<style type="text/css">
    .Contact {
        max-width: 500px;
        padding: 10px 20px;
        background: #f4f7f8;
        margin: 10px auto;
        padding: 20px;
        background: #f4f7f8;
        border-radius: 8px;
    }
    
    .Contact fieldset {
        border: none;
    }
    
    .Contact legend {
        font-size: 1.4em;
        margin-bottom: 10px;
    }
    
    .Contact label {
        display: block;
        margin-bottom: 8px;
    }
    
    .Contact input[type="text"],
    .Contact input[type="date"],
    .Contact input[type="tel"],
    .Contact input[type="file"],
    .Contact input[type="datetime"],
    .Contact input[type="email"],
    .Contact input[type="number"],
    .Contact input[type="search"],
    .Contact input[type="time"],
    .Contact input[type="url"],
    .Contact textarea,
    .Contact select {
        background: rgba(255, 255, 255, .1);
        border: none;
        border-radius: 4px;
        font-size: 16px;
        margin: 0;
        outline: 0;
        padding: 7px;
        width: 100%;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        background-color: #e8eeef;
        color: #8a97a0;
        -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
        margin-bottom: 30px;
    }
    
    .Contact input[type="text"]:focus,
    .Contact input[type="date"]:focus,
    .Contact input[type="tel"]:focus,
    .Contact input[type="datetime"]:focus,
    .Contact input[type="email"]:focus,
    .Contact input[type="number"]:focus,
    .Contact input[type="search"]:focus,
    .Contact input[type="time"]:focus,
    .Contact input[type="url"]:focus,
    .Contact textarea:focus,
    .Contact select:focus {
        background: #d2d9dd;
    }
    
    .Contact select {
        -webkit-appearance: menulist-button;
        height: 35px;
    }
    
    .Contact .number {
        background: #1abc9c;
        color: #fff;
        height: 30px;
        width: 30px;
        display: inline-block;
        font-size: 0.8em;
        margin-right: 4px;
        line-height: 30px;
        text-align: center;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
        border-radius: 15px 15px 15px 0px;
    }
    /* Css button */
    
    .Contact input[type="submit"],
    .Contact input[type="button"] {
        position: relative;
        display: block;
        padding: 19px 39px 18px 39px;
        color: #FFF;
        margin: 0 auto;
        background: #1abc9c;
        font-size: 18px;
        text-align: center;
        font-style: normal;
        width: 100%;
        border: 1px solid #16a085;
        border-width: 1px 1px 3px;
        margin-bottom: 10px;
    }
    
    .Contact input[type="submit"]:hover,
    .Contact input[type="button"]:hover {
        background: #109177;
    }
    /* Css thông báo gửi thành công */
    
    .success {
        padding: 14px 23px;
        margin-bottom: 10px;
        background: #ff8c10;
        border: 1px solid #222222;
        font-size: 16px;
        font-family: Arial, Helvetica, Sans Serif;
        text-align: center;
        color: white;
    }
</style>