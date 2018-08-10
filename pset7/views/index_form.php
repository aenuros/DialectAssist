<p>What's good, party people! Please fill out the following survey.</p>

<form action="index.php" method="post">
  <fieldset>
    <legend>Demographics</legend>
    
    <legend>What state did you grow up in? (If you did not grow up in the US, choose the state you've lived in longest)</legend>
    <select name="state">
                <option value="Alabama">Alabama</option>
<option value="Alaska">Alaska</option>
<option value="Arizona">Arizona</option>
<option value="Arkansas">Arkansas</option>
<option value="California">California</option>
<option value="Colorado">Colorado</option>
<option value="Connecticut">Connecticut</option>
<option value="Delaware">Delaware</option>
<option value="Washington, D.C.">D.C.</option>
<option value="Florida">Florida</option>
<option value="Georgia">Georgia</option>
<option value="Hawaii">Hawaii</option>
<option value="Idaho">Idaho</option>
<option value="Illinois">Illinois</option>
<option value="Indiana">Indiana</option>
<option value="Iowa">Iowa</option>
<option value="Kansas">Kansas</option>
<option value="Kentucky">Kentucky</option>
<option value="Louisiana">Louisiana</option>
<option value="Maine">Maine</option>
<option value="Maryland">Maryland</option>
<option value="Massachusetts">Massachusetts</option>
<option value="Michigan">Michigan</option>
<option value="Minnesota">Minnesota</option>
<option value="Mississippi">Mississippi</option>
<option value="Missouri">Missouri</option>
<option value="Montana">Montana</option>
<option value="Nebraska">Nebraska</option>
<option value="Nevada">Nevada</option>
<option value="New Hampshire">New Hampshire</option>
<option value="New Jersey">New Jersey</option>
<option value="New Mexico">New Mexico</option>
<option value="New York">New York</option>
<option value="North Carolina">North Carolina</option>
<option value="North Dakota">North Dakota</option>
<option value="Ohio">Ohio</option>
<option value="Oklahoma">Oklahoma</option>
<option value="Oregon">Oregon</option>
<option value="Pennsylvania">Pennsylvania</option>
<option value="Rhode Island">Rhode Island</option>
<option value="South Carolina">South Carolina</option>
<option value="South Dakota">South Dakota</option>
<option value="Tennessee">Tennessee</option>
<option value="Texas">Texas</option>
<option value="Utah">Utah</option>
<option value="Vermont">Vermont</option>
<option value="Virginia">Virginia</option>
<option value="Washington">Washington</option>
<option value="West Virginia">West Virginia</option>
<option value="Wisconsin">Wisconsin</option>
<option value="Wyoming">Wyoming</option>

  </select>
    
    <br />
    <br />
    <legend>Select your gender.</legend>
    <p>
      <input type="radio" name="gender" id="gender_1" value="1" checked />
      <label for="gender_1">Female</label>
    </p>
    <p>
      <input type="radio" name="gender" id="gender_2" value="0">
      <label for="gender_2">Male</label>
    </p>
  
    <legend>Select your race.</legend>
    <p>
      <input type="radio" name="race" id="race_1" value="1" checked />
      <label for="race_1">Black</label>
    </p>
    <p>
      <input type="radio" name="race" id="race_2" value="2">
      <label for="race_2">White</label>
    </p>
    <p>
      <input type="radio" name="race" id="race_3" value="3">
      <label for="race_3">Asian</label>
    </p>
    <p>
      <input type="radio" name="race" id="race_4" value="4">
      <label for="race_4">Other</label>
    </p>
  </fieldset>
  
  <fieldset>
    <legend>Pronunciation Questions</legend>
  <legend>Say "cot" and "caught" aloud. Do these two words rhyme?</legend>
    <p>
      <input type="radio" name="ccmerge" id="ccmerge_1" value="1" checked />
      <label for="ccmerge_1">Yes</label>
    </p>
    <p>
      <input type="radio" name="ccmerge" id="ccmerge_2" value="0">
      <label for="ccmerge_2">No</label>
    </p>
  
  <legend>Say "pin" and "pen" aloud. Do these two words rhyme?</legend>
    <p>
      <input type="radio" name="ppmerge" id="ppmerge_1" value="1" checked />
      <label for="ppmerge_1">Yes</label>
    </p>
    <p>
      <input type="radio" name="ppmerge" id="ppmerge_2" value="0">
      <label for="ppmerge_2">No</label>
    </p>
  
  <legend>How do you pronounce "mary," "merry," and "marry"?</legend>
    <p>
      <input type="radio" name="m3merge" id="m3merge_1" value="0" checked />
      <label for="m3merge_1">I pronounce at least one of these words different from the others.</label>
    </p>
    <p>
      <input type="radio" name="m3merge" id="m3merge_2" value="1">
      <label for="m3merge_2">I pronounce all three the same.</label>
    </p>
  </fieldset>

  <input type="submit" value="Submit">
  </form>