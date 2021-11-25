<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <?php require "header.php"; ?>

    <!-- main screen  -->

    <main>
      <div id="welcome">
        <h1>What CodeShop means for your business?</h1>
        <p>
          With a CodeShop account, you get to quickly implement the vision of
          your business. Buy and launch a mobile up in 24 hours, not 3 months
          Get your accoutning software up and running tomorrow
        </p>
      </div>


      <!-- tabs  -->
      <div id="login-sign-up">

        <!-- tab headers  -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button
            class="nav-link active"
            id="home-tab"
            data-bs-toggle="tab"
            data-bs-target="#home"
            type="button"
            role="tab"
            aria-controls="home"
            aria-selected="true"
            >
            Buyer  Account
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button
          class="nav-link"
          id="profile-tab"
          data-bs-toggle="tab"
          data-bs-target="#profile"
          type="button"
          role="tab"
          aria-controls="profile"
          aria-selected="false"
          >
          Developer  Account
        </button>
      </li>
    </ul>


    <!-- Tab body  -->
    <div class="tab-content" id="myTabContent">
      <div
      class="tab-pane fade show active"
      id="home"
      role="tabpanel"
      aria-labelledby="home-tab"
      >
      <?php require_once "buyer_account_form.php" ?>
    </div>
    <div
    class="tab-pane fade"
    id="profile"
    role="tabpanel"
    aria-labelledby="profile-tab"
    >
    <?php require_once "developer_account_form.php" ?>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="./functions/signup.js"></script>
</div>
</main>
<!-- footer -->
<?php require_once "footer.php"?>