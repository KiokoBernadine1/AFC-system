<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>ATW | Home </title>
</head>
<body>

    <header>
        <nav>
            <ul class="nav navbar justify-content-end">
                  <li class="nav-item">
                  <a class="nav-link" href="{{Route('history')}}"> History </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{Route('logout')}}">Log Out</a>
                  </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Balance</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Mpesa</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">E-Wallet</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Credit Card</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Other</a>

                  </div>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Login</a>
                </li> -->
              </ul>

              <!-- <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </nav> -->
        </nav>
    </header>
