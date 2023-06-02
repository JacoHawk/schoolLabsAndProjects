<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="Assets/CSS/page3.css" type="text/css" rel="stylesheet" />
    <title>Page 3, Project 1</title>
  </head>
  <body><header>
      <h1>Accessible Form Example</h1>
      <br />
      <h2>Required inputs are labelled</h2>
    </header>
    <br />
    <hr />
    <br />
    <main>
      <form method=”post” action=”<?php echo htmlspecialchars($_SERVER[‘PHP_SELF’]); ?>”>
        <input type="hidden" name="recipient" value="jh719d@lab.icc.edu" />

        <label for="name"> Name: (Required)</label> <br />
        <input type="text" id="name" name="name" placeholder="First Name, Last Name" autocomplete="name" aria-required="true" /> <br />

        <label for="email"> Email: (Required)</label> <br />
        <input
          spellcheck="false"
          type="text"
          id="email"
          name="email"
          placeholder="Email Address"
          autocomplete="email"
          aria-required="true"
          aria-invalid="true"
          pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$"
        />
        <br /><br />

        <fieldset>
          <legend class="question">Which of these food groups do you most enjoy? (select all that apply)</legend>

          <label for="veggies"> Veggies : </label>
          <input type="checkbox" id="veggies" name="food-group" /> <br />

          <label for="fruits"> Fruits : </label>
          <input type="checkbox" id="fruits" name="food-group" /> <br />

          <label for="dairy"> Dairy : </label>
          <input type="checkbox" id="dairy" name="food-group" /> <br />

          <label for="protein"> Protein (meat, seafood, nuts, etc.) : </label>
          <input type="checkbox" id="protein" name="food-group" /> <br />

          <label for="grains"> Grains (bread, pretzels, pasta, etc.) : </label>
          <input type="checkbox" id="grains" name="food-group" /> <br />
        </fieldset>

        <br />

        <fieldset>
          <legend class="question">Which smartphone operating system do you prefer? (Select one)</legend>
          <label for="iPhone"> iOS (iPhone) : </label>
          <input type="radio" name="operating-system" id="iPhone" value="iOS/iPhone" /> <br />
          <label for="android"> Android OS (Google Pixel, Samsung, etc.): </label>
          <input type="radio" name="operating-system" id="android" value="android" /> <br />
          <label for="other"> Other : </label>
          <input type="radio" name="operating-system" id="other" value="other" /> <br />
        </fieldset>

        <br />

        <fieldset>
          <legend class="question">Which computer operating system do you use the most?</legend>
          <label for="computer-system"> Choose one: </label>
          <select id="computer-system" name="select">
            <option value="1">Windows</option>
            <option value="2">MacOS</option>
            <option value="3">Linux</option>
            <option value="4">Other</option>
          </select>
        </fieldset>

        <br />

        <fieldset>
          <legend class="question">Do you have any notes?</legend>
          <label for="notes">Leave any notes here:</label><br />
          <textarea id="notes" name="notes" rows="4" cols="80" aria-required="false"> </textarea>
        </fieldset>
        <input type="reset" name="reset" value="Reset the Form" /> <br />
        <br />
        <input type="submit" name="submit-form" value="Submit the Form" /><br />
      </form>
    </main>
  </body>
</html>