

<form id="addContact" action="#" method="POST">
  <div class="row">
    <div class="large-6 columns">
      <label>First Name
        <input name="first_name" type="text" placeholder="Enter First Name" />
      </label>
    </div>
    <div class="large-6 columns">
      <label>Last Name
        <input name="last_name" type="text" placeholder="Enter Last Name" />
      </label>
    </div>
    
    <div class="large-4 columns">
      <label>Email
        <input name="email" type="email" placeholder="Enter E-mail Address" />
      </label>
    </div>
     <div class="large-4 columns">
      <label>Phone Number
        <input name="phone" type="text" placeholder="Enter Phone Number" />
      </label>
    </div>
     <div class="large-4 columns">
      <label>Contact Group
        <select name="contact_group">
            <option value="husker">Family</option>
            <option value="startbuck">Friends</option>
            <option value="hotdog">Business</option>
        </select>
      </label>
    </div>
    
    <div class="large-6 columns">
      <label>Address 1
        <input name="address1" type="text" placeholder="Enter Address 1" />
      </label>
    </div>
    <div class="large-6 columns">
      <label>Address 2
        <input name="address2" type="text" placeholder="Enter Address 2" />
      </label>
    </div>
    
    <div class="large-4 columns">
      <label>City
        <input name="city" type="text" placeholder="Enter City" />
      </label>
    </div>
     <div class="large-4 columns">
      <label>State
        <select name="state">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>				
      </label>
    </div>
     <div class="large-4 columns">
      <label>ZIP Code
        <input name="zipcode" type="text" placeholder="Enter your ZIP" />
      </label>
    </div>
   </div>
   <div class="row">
    <div class="large-12 columns">
    <label>Notes
    <textarea name="notes" placeholder="Enter Optional Notes"></textarea>
    </label>
    </div>
   </div> 
   <input type="submit" class="add-btn button small right" value="Submit" />
   <a class="close-reveal-modal">&#215;</a>
</form>