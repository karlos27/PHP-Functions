<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>PHP - Functions</title>
  </head>
  <body>
    <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
      <span class="navbar-brand mb-0 h1">PHP - Functions</span>
    </nav>
    <br />
    <div class="container">
      <div class="row">
        <div class="col">
            <table class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Function name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Link</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>sizeof</td>
                  <td>This function is an alias of: count(). </td>
                  <td><a href="https://www.php.net/manual/en/function.sizeof.php" target="_blank">function.sizeof.php</a></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>count</td>
                  <td>Count all elements in an array, or something in an object.</td>
                  <td><a href="https://www.php.net/manual/en/function.count.php" target="_blank">function.count.php</a></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>in_array</td>
                  <td>Checks if a value exists in an array.</td>
                  <td><a href="https://www.php.net/manual/en/function.in-array.php" target="_blank">function.in-array.php</a></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>array_key_exists</td>
                  <td>Checks if the given key or index exists in the array.</td>
                  <td><a href="https://www.php.net/manual/en/function.array-key-exists.php" target="_blank">function.array-key-exists.php</a></td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>sort</td>
                  <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal_sort">Sort an array</button>
                  </td>
                  <td><a href="https://www.php.net/manual/en/function.sort.php" target="_blank">function.sort.php</a></td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>asort</td>
                  <td>Sort an array and maintain index association from lowest to highest values.</td>
                  <td><a href="https://www.php.net/manual/en/function.asort.php" target="_blank">function.asort.php</a></td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>rsort</td>
                  <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal_rsort">Sort an array in reverse order</button>
                  </td>
                  <td><a href="https://www.php.net/manual/en/function.rsort.php" target="_blank">function.rsort.php</a></td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td>arsort</td>
                  <td>Sort an array in reverse order and maintain index association.</td>
                  <td><a href="https://www.php.net/manual/en/function.arsort.php" target="_blank">function.arsort.php</a></td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td>ksort</td>
                  <td>Sort an array by key (from lowest to highest keys).</td>
                  <td><a href="https://www.php.net/manual/en/function.ksort.php" target="_blank">function.ksort.php</a></td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td>krsort</td>
                  <td>Sort an array by key in reverse order</td>
                  <td><a href="https://www.php.net/manual/en/function.krsort.php" target="_blank">function.krsort.php</a></td>
                </tr>
                <tr>
                  <th scope="row">11</th>
                  <td>array_search</td>
                  <td>Searches the array for a given value and returns the first corresponding key if successful.</td>
                  <td><a href="https://www.php.net/manual/en/function.array-search.php" target="_blank">function.array-search.php</a></td>
                </tr>
                <tr>
                  <th scope="row">12</th>
                  <td>explode</td>
                  <td>Split a string by a string.</td>
                  <td><a href="https://www.php.net/manual/en/function.explode.php" target="_blank">function.explode.php</a></td>
                </tr>
                <tr>
                  <th scope="row">13</th>
                  <td>implode</td>
                  <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal_implode">Join array elements with a string</button>
                  </td>
                  <td><a href="https://www.php.net/manual/en/function.implode.php" target="_blank">function.implode.php</a></td>
                </tr>
                <tr>
                  <th scope="row">14</th>
                  <td>str_split</td>
                  <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal_strsplit">Convert a string to an array</button>
                  </td>
                  <td><a href="https://www.php.net/manual/en/function.str-split.php" target="_blank">function.str-split.php</a></td>
                </tr>
                <tr>
                  <th scope="row">15</th>
                  <td>array_push</td>
                  <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal_arraypush">Push one or more elements onto the end of array
                    </button>
                  </td>
                  <td><a href="https://www.php.net/manual/en/function.array-push.php" target="_blank">function.array-push.php</a></td>
                </tr>
                <tr>
                  <th scope="row">16</th>
                  <td>array_pop</td>
                  <td>Pop the element off the end of array.</td>
                  <td><a href="https://www.php.net/manual/en/function.array-pop.php" target="_blank">function.array-pop.php</a></td>
                </tr>
                <tr>
                  <th scope="row">17</th>
                  <td>array_rand</td>
                  <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal_arrayrand">Pick one or more random keys out of an array</button>
                  </td>
                  <td><a href="https://www.php.net/manual/en/function.array-rand.php" target="_blank">function.array-rand.php</a></td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div>
    <!-- Modal sort() -->
    <div class="modal fade" id="Modal_sort" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">sort</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>The <strong>sort()</strong> function loses the source key (the index association). The source keys are replaced by an increasing number, starting from zero.</p>
            <p><strong>From lowest to highest values.</strong></p>
            <a href="https://www.php.net/manual/en/function.sort.php" target="_blank">function.sort.php</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Modal rsort() -->
    <div class="modal fade" id="Modal_rsort" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">rsort</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>The <strong>rsort()</strong> function loses the source key (the index association). The source keys are replaced by an increasing number, starting from zero.</p>
            <p><strong>From highest to lowest values.</strong></p>
            <a href="https://www.php.net/manual/en/function.rsort.php" target="_blank">function.rsort.php</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Modal implode() -->
    <div class="modal fade" id="Modal_implode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">implode</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><strong>Table keys</strong> have no effect on function.</p>
            <a href="https://www.php.net/manual/en/function.implode.php" target="_blank">function.implode.php</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Modal strsplit() -->
    <div class="modal fade" id="Modal_strsplit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">str_split</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>If the optional <strong>split_length</strong> parameter is specified, the returned array will be broken down into chunks with each being split_length in length, otherwise each chunk will be one character in length.</p>
            <a href="https://www.php.net/manual/en/function.str-split.php" target="_blank">function.str-split.php</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Modal array_push() -->
    <div class="modal fade" id="Modal_arraypush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">array_push</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><strong>Syntax:</strong><br />array_push(array, value1, value2, ...)</p>
            <a href="https://www.php.net/manual/en/function.array-push.php" target="_blank">function.array-push.php</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Modal array_rand() -->
    <div class="modal fade" id="Modal_arrayrand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">array_rand</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>The selected number must not be equal to or greater than the number of elements in the table.</p>
            <p><strong>Syntax:</strong><br />array_rand(array, x)</p>
            <a href="https://www.php.net/manual/en/function.array-rand.php" target="_blank">function.array-rand.php</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>