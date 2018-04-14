<?php
    include("header.php");
?> 
<main class="contact">

    <h1>Contact</h1>

    <form action="#" method="post" onSubmit="alert('Thank you. We have received your information and we will contact your shortly.');">
    <ul class="form-style-1">
        <li><label >Full Name <span class="required">*</span></label><input type="text" name="field1" class="field-divided" id ="first" placeholder="First" required />&nbsp;<input type="text" name="field2" class="field-divided" placeholder="Last" required/></li>
        <li>
            <label>Email <span class="required">*</span></label>
            <input type="email" name="field3" class="field-long" required />
        </li>
        <li>
            <label>Telephone </label>
            <input type="tel" class="field-long" />
        </li>
        <li>
            <div class="radio-group">
                <label>Are you a/an:</label>
                <span><input type="radio" id="contactChoice1"
                name="contact" value="email" class="radio-group">Current Student</span>
                <span><input type="radio" id="contactChoice2"
                name="contact" value="phone" class="radio-group" checked="checked" >Prospective Student</span>
                <span><input type="radio" id="contactChoice3"
                name="contact" value="mail" class="radio-group">Instructor</span>
            </div>
        </li>
        <li>
            <label>Your Message <span class="required">*</span></label>
            <textarea name="field5" id="field5" class="field-long field-textarea" required></textarea>
        </li>
        <li>
            <input type="submit" value="Submit" />
        </li>   
    </ul>
    </form>
</main>
<?php
    include("footer.php");
?>