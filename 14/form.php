<?php
return <<<_END
    <div class="field">
        <label class="label">Имя</label>
        <div class="control">
            <input class="input" id="name" name="name" required="required" type="text">
        </div>
    </div>
    <div class="field">
        <label class="label">Email</label>
        <div class="control">
            <input class="input" id="email" name="email" required="required" type="email">
        </div>
    </div>
    <div class="field">
        <label class="label">Отзыв</label>
        <div class="control">
            <textarea class="textarea" id="text" name="text" required="required"></textarea>
        </div>
    </div>
    <div class="field">
        <div class="control">
            <label class="checkbox"><input required="required" type="checkbox">Согласен с условиями</label>
        </div>
    </div>
    <div class="field">
        <div class="control has-text-centered">
            <button class="button is-warning has-text-weight-bold" type="submit">Отправить отзыв</button>
        </div>
    </div>
_END;