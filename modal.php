<div id="cookieModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2 class="modal-title">Cookie Preferences</h2>
    <p>We use cookies to improve your browsing experience, deliver personalized ads or content, and analyze our traffic. By clicking on 'Accept All,' you consent to our use of cookies. Please select your cookie preferences:</p>
    <p><a href="/cookies-info.php">Learn More</a></p>
    <form id="cookieForm">
      <input type="checkbox" id="essentialCookies" name="cookies" value="essential" checked disabled>
      <label for="essentialCookies">Essential Cookies (required)</label><br>
      <input type="checkbox" id="analyticsCookies" name="cookies" value="analytics">
      <label for="analyticsCookies">Analytics Cookies</label><br>
      <input type="checkbox" id="marketingCookies" name="cookies" value="marketing">
      <label for="marketingCookies">Marketing Cookies</label><br>
      <button type="submit">Save Preferences</button>
    </form>
  </div>
</div>


<style>

.modal-title{
    font-size:20px;
}



.modal {
  display: none;
  position: fixed;
  z-index: 99;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 30%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

</style>


<script>
// Get the modal
var modal = document.getElementById("cookieModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the span (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Function to set a cookie
function setCookie(name, value, days) {
  var expires = "";
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Function to handle form submission
document.getElementById("cookieForm").onsubmit = function(event) {
  event.preventDefault();

  // Get the values of the checkboxes
  var analyticsCookies = document.getElementById("analyticsCookies").checked;
  var marketingCookies = document.getElementById("marketingCookies").checked;

  // Set cookies based on user selection
  setCookie("analyticsCookies", analyticsCookies, 365); // Set for 1 year
  setCookie("marketingCookies", marketingCookies, 365); // Set for 1 year

  // Example: Set a cookie for the user's favorite menu item
  var favoriteMenuItem = "Chicken";
  setCookie("favoriteMenuItem", favoriteMenuItem, 365); // Set for 1 year

  // Example: Set a cookie for the user's preferred location
  var preferredLocation = "Fried chicken - Leg ";
  setCookie("preferredLocation", preferredLocation, 365); // Set for 1 year

  alert("Preferences saved!");
  modal.style.display = "none";
};

// Function to show the modal
function showCookieModal() {
  modal.style.display = "block";
}

// Show the modal on page load or based on a specific condition
showCookieModal();


</script>