<?php require 'htmlhead.php';?>
<div class="container">
      <form action='createaccin.php' method='POST'>
        <div class="row">
          <div class="form-group col-sm-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name='name' required>
          </div>
          <div class="form-group col-sm-6">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name='email' required>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-sm-6">
            <label for="phone">Phone</label>
            <input type="tel" class="form-control" id="phone" placeholder="Enter phone number" name='phone' required>
          </div>
          <div class="form-group col-sm-6">
            <label for="date">Ac opening date</label>
            <input type="date" class="form-control" id="date" placeholder="Enter date" >
          </div>
        </div>
        <div class="row">
          <div class="form-group col-sm-6">
            <label for="amount">Initial amount</label>
            <input type="number" class="form-control" id="amount" placeholder="Enter amount" name='amount' required>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" value='submit'>Submit</button>
        <a href='index.php' class='btn btn-secondary'>back</a>
      </form>
    </div>
<?php require 'htmlfoot.php';?>
