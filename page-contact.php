<?php get_header();?>
    <main>
        <div class="title-container yellow">
            <h2 class="page-title">お問い合わせ</h2>
        </div>
        <div class="wave-top">
            <div class="subpage-center">
                <p class="form-guidance">以下のフォームにご入力の上、「送信」ボタンを押してください</p>
                <div class="contact-form">
                    <p><span class="asterisk">*</span> は必須項目です。</p>
                    <form action="#" method="post">
                        <h2>基本情報</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="last-name">姓<span class="asterisk">*</span></label>
                                <input type="text" id="last-name" name="last-name" required> 
                            </div>
                            <div class="form-group">
                                <label for="first-name">名<span class="asterisk">*</span></label>
                                <input type="text" id="first-name" name="first-name" required> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mail">メールアドレス<span class="asterisk">*</span></label>
                            <input type="text" id="mail" name="mail" required> 
                        </div>
                        <div class="form-group">
                            <label for="phone">電話番号<span class="asterisk">*</span></label>
                            <input type="text" id="phone" name="phone" required> 
                        </div>

                        <h2>お問い合わせ内容</h2>
                        <div class="form-group">
                            <label for="inquiry-type">件名<span class="asterisk">*</span></label>
                            <div class="radio-group">
                                <div class="flex">                                
                                    <input type="radio" id="freelance" name="inquiry-type" value="freelance" checked>
                                    <label for="freelance">フリーランス案件希望</label>
                                </div>
                                <div class="flex">
                                    <input type="radio" id="partner" name="inquiry-type" value="partner">
                                    <label for="partner">SES事業パートナー希望</label>
                                </div>
                                <div class="flex">
                                    <input type="radio" id="other" name="inquiry-type" value="other">
                                    <label for="other">その他</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">本文<span class="asterisk">*</span></label>
                            <textarea name="message" id="message" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit">送信</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php get_footer();?>