<div id="prototype-page" class="page">
    <div class="border" data-position="top"></div>
    <div class="border" data-position="right"></div>
    <div class="border" data-position="left"></div>
    <div class="border" data-position="bottom"></div>
    <div class="vertical-container">
        <div class="vertical-content">
            <div class="container">
                <form class="nl-form" action="http://www.feedmusic.com/views/ajax/request-prototype.php">
                    My name is
                    <input type="text" name="fullname" placeholder="your name">.
                    <br>
                    I am
                    <select name="role">
                        <option value="investor" selected>investor</option>
                        <option value="partner">partner</option>
                        <option value="musician">musician</option>
                        <option value="label">label</option>
                        <option value="brand sponsor">brand sponsor</option>
                        <option value="just interested">just interested</option>
                        <option value="">join the team?</option>
                    </select>
                    I’d like to see the live prototype, you can contact me at
                    <input type="email" name="email" placeholder="your email">.
                    <br>

                    <input type="hidden" name="action" value="form_submit_contact" />
                    <input type="hidden" name="_tesla_hash" value="ZGD5BQRjZQLkZt==" />
                    <div class="submit-wrapper">
                        <button class="nl-submit" type="submit" data-send-text="Sending...">Submit</button>

                        <p class="error">:( Oops! Something was wrong, check the form <br> and retry</p>
                        <p class="success">Thanks! We will be in touch asap :)</p>
                    </div>

                    <div class="nl-overlay"></div>
                </form>
            </div>
        </div>
    </div>
</div>
