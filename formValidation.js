
function validateForm() {
    const name = document.getElementById("name").value.trim();
    const type = document.getElementById("type").value.trim();
    const city = document.getElementById("city").value.trim();
    const date = document.getElementById("date").value;
  
    if (!name || !type || !city || !date) {
      alert("Please fill in all fields.");
      return false; 
    }
    return true; 
  }
  