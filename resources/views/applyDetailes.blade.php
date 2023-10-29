<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/applay.css" />
  </head>
  <style>
    body {
        width: 100%;
        height: 100vh;
        margin: 0;
        background-color: #023047;
        color: #f5f6f7;
        font-family: Tahoma;
        font-size: 16px;
      }
      
      h1, p {
        margin: 1em auto;
        text-align: center;
      }
      
      form {
        width: 60vw;
        max-width: 500px;
        min-width: 300px;
        margin: 0 auto;
      }
      
      fieldset {
        border: none;
        padding: 2rem 0;
        border-bottom: 3px solid #01273a;
      }
      
      fieldset:last-of-type {
        border-bottom: none;
      }
      
      label {
        display: block;
        margin: 0.5rem 0;
      }
      
      input,
      textarea,
      select {
        margin: 10px 0 0 0;
        width: 100%;
        min-height: 2em;
      }
      
      input, textarea {
        background-color: #042736;
        border: 1px solid #022b3d;
        color: #ffffff;
      }
      
      .inline {
        width: unset;
        margin: 0 0.5em 0 0;
        vertical-align: middle;
      }
      
      input[type="submit"] {
        display: block;
        width: 60%;
        margin: auto auto 50px auto;
      background-color: #FBA504;
      }
      
  </style>
  <body>
    <h1>Registration Form</h1>
    <p>Please fill out this form with the required information</p>
    <form method="post" action='https://register-demo.freecodecamp.org'>
      <fieldset>
        <label for="first-name">Enter Your First Name: <input id="first-name" name="first-name" type="text" required /></label>
        <label for="last-name">Enter Your Last Name: <input id="last-name" name="last-name" type="text" required /></label>
        <label for="email">Enter Your Email: <input id="email" name="email" type="email" required /></label>
        <label for="new-password">Create a New Password: <input id="new-password" name="new-password" type="password" pattern="[a-z0-5]{8,}" required /></label>
      </fieldset>
      <!-- <fieldset>
        <label for="personal-account"><input id="personal-account" type="radio" name="account-type" class="inline" /> Personal Account</label>
        <label for="business-account"><input id="business-account" type="radio" name="account-type" class="inline" /> Business Account</label>
        <label for="terms-and-conditions">
          <input id="terms-and-conditions" type="checkbox" required name="terms-and-conditions" class="inline" /> I accept the <a href="https://www.freecodecamp.org/news/terms-of-service/">terms and conditions</a>
        </label>
      </fieldset> -->
      <fieldset>
        <label for="profile-picture">Upload a profile picture: <input id="profile-picture" type="file" name="file" /></label>
        <label for="age">Input your age (years): <input id="age" type="number" name="age" min="13" max="120" /></label>
        <!-- <label for="referrer">How did you hear about us?
          <select id="referrer" name="referrer">
            <option value="">(select one)</option>
            <option value="1">freeCodeCamp News</option>
            <option value="2">freeCodeCamp YouTube Channel</option>
            <option value="3">freeCodeCamp Forum</option>
            <option value="4">Other</option>
          </select>
        </label> -->
        <label for="bio">Provide a bio:
          <textarea id="bio" name="bio" rows="3" cols="30" placeholder=""></textarea>
        </label>
      </fieldset>
      <input type="submit" value="Submit" />
    </form>
  </body>
</html>