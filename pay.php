<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Form with Paystack</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="css/pay.css">
</head>
<body>
  <form class="form" id="paymentForm" action="code.php" method = "Post">
    <p class="title">Make Payment</p>

    <div class="flex">
      <label>
        <i class="fas fa-user"></i>
        <input class="input" type="text"   name = "first_name" id="Fname" required />
        <span>Firstname</span>
      </label>
      <label>
        <i class="fas fa-user"></i>
        <input class="input" type="text"   name = "last_name" id="Lname" required />
        <span>Lastname</span>
      </label>
    </div>

    <label>
      <i class="fas fa-envelope"></i>
      <input class="input" type="email"   name = "email" id="email-address" required />
      <span>Email</span>
    </label>

    <label>
      <i class="fas fa-user"></i>
      <input class="input" type="text"   name = "session" id="Session" required />
      <span>Session</span>
    </label>

    <div class="flex">
      <label>
        <i class="fas fa-user"></i>
        <select id="Term" class="input"  name = "term" required>
          <option value="">Select Term</option>
          <option value="1st">1ST Term</option>
          <option value="2nd">2ND Term</option>
          <option value="3rd">3RD Term</option>
        </select>
      </label>
      <label>
        <i class="fas fa-user"></i>
        <select class="input" id="studentClass" name = "class" required>
          <option value="">Select Class</option>
          <option value="Nur 1" data-amount="3000">Nursery 1 - ₦3000</option>
          <option value="Nur 2" data-amount="3500">Nursery 2 - ₦3500</option>
          <option value="Pri1" data-amount="4000">Primary 1 - ₦4000</option>
          <option value="Pri2" data-amount="4500">Primary 2 - ₦4500</option>
          <option value="Pri3" data-amount="5000">Primary 3 - ₦5000</option>
          <option value="Pri4" data-amount="5500">Primary 4 - ₦5500</option>
          <option value="Pri5" data-amount="6000">Primary 5 - ₦6000</option>
          <option value="JSS1" data-amount="7000">JSS 1 - ₦7000</option>
          <option value="JSS2" data-amount="7500">JSS 2 - ₦7500</option>
          <option value="JSS3" data-amount="8000">JSS 3 - ₦8000</option>
          <option value="SSS1" data-amount="9000">SSS 1 - ₦9000</option>
          <option value="SSS2" data-amount="9500">SSS 2 - ₦9500</option>
          <option value="SSS3" data-amount="10000">SSS 3 - ₦10,000</option>
        </select>
      </label>
    </div>

    <button type="button" class="submit" name = "pay" onclick="payWithPaystack()">Pay</button>
  </form>

  <!-- Paystack JavaScript library -->
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <script>
    function payWithPaystack() {
      const firstName = document.getElementById('Fname').value;
      const lastName = document.getElementById('Lname').value;
      const email = document.getElementById('email-address').value;
      const session = document.getElementById('Session').value;
      const term = document.getElementById('Term').value;
      const classSelect = document.getElementById('studentClass');
      const studentClass = classSelect.options[classSelect.selectedIndex].value;
      const amount = classSelect.options[classSelect.selectedIndex].getAttribute('data-amount');

      if (!email || !firstName || !lastName || !session || !term || !studentClass || !amount) {
        alert("Please fill in all required fields.");
        return;
      }

      let handler = PaystackPop.setup({
        key: 'pk_test_ab1fdfb1aa9798bf126fa9a1629f26a2b38ff7f5', // Replace with your Paystack public key
        email: email,
        amount: amount * 100, // Amount in kobo
        currency: 'NGN',
        ref: 'PS-' + Math.floor((Math.random() * 1000000000) + 1), // Generate a unique reference
        metadata: {
          custom_fields: [
            {
              display_name: "Student Name",
              variable_name: "student_name",
              value: firstName + " " + lastName
            },
            {
              display_name: "Session",
              variable_name: "session",
              value: session
            },
            {
              display_name: "Class",
              variable_name: "class",
              value: studentClass
            },
            {
              display_name: "Term",
              variable_name: "term",
              value: term
            }
          ]
        },
        callback: function(response) {
          // Redirect to receipt.html with transaction details
          const redirectURL = `receipt.html?reference=${response.reference}&name=${encodeURIComponent(firstName + " " + lastName)}&email=${encodeURIComponent(email)}&session=${encodeURIComponent(session)}&class=${encodeURIComponent(studentClass)}&term=${encodeURIComponent(term)}&amount=${encodeURIComponent(amount)}`;
          window.location.href = redirectURL;
        },
        onClose: function() {
          alert('Transaction was not completed.');
        }
      });

      handler.openIframe();
    }
  </script>
</body>
</html>
