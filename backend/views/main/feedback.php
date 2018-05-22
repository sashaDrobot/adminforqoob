<div class="container feedback-container">
    <div class="row text-center">
        <div class="col-12">
            <h1 class="feedback-header">Tell us about the project</h1>
        </div>
    </div>

    <form class="text-center" action="send" method="post" id="feedback">
        <div class="form-group">
            <input type="text" class="form-control" id="InputName" placeholder="ENTER YOUR NAME" name="name" required>
        </div>

        <div class="form-group">
            <input class="form-control" type="tel" placeholder="ENTER YOUR PHONE" id="InputTel" name="phone" required>
        </div>

        <div class="form-group">
            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="ENTER YOUR EMAIL" name="email" required>
        </div>

        <div class="form-group">
            <textarea class="form-control" id="Textarea" rows="3" placeholder="TELL ABOUT YOUR PROJECT" name="text" required></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="qoob-button gradient-button">
                <span>Send</span>
            </button>
        </div>

    </form>

</div>