<?
session_start();
// include '../../Controllers/Login/Logout.inc.php';
include '../../Controllers/Contacts/contacts.controller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel='stylesheet' href='../../Views/Includes/style.inc.css'>

    <? include '../../Views/Components/Links/Links.inc.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <!-- Navbar content -->
        <a class="navbar-brand" href="#">Hidden brand</a>
        <ul class="navbar-nav my-2 my-lg-0 menu-list">
            <li class="nav-item logout" name="logout"><a href="?logout=true">Logout</a></li>
        </ul>
    </nav>


    <div class="contacts-container">
        <table class="table table-hover">
            <thead class="thead-blue ">
                <tr class="table-title">
                    <th scope="col" class="title-text">Contact List </th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form-modal">add contact</button></th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <thead class="thead-blue">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Middle Initial</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?

                $gdata = explode("&", $gdata);
                $index = 0;
                foreach ($gdata as $val) {
                    // fwrite($this->filename, $val."\n");                    
                    $datain = explode("*", $val);

                    if (
                        isset($datain[0])
                        && isset($datain[1])
                        && isset($datain[2])
                        && isset($datain[3])
                        && isset($datain[4])
                    ) {
                        echo "<tr>
                            <th scope='row'>{index+1}</th>
                            <th >$datain[0]</th>
                            <td>$datain[1]</td>
                            <td>$datain[2]</td>
                            <td>$datain[3]</td>
                            <td>$datain[4]</td>
                            <td><button type='submit' class=' delete-btn btn btn-warning' data-toggle='modal' data-target='#delete-modal' data-id='$index' id='delete-btn'>Delete</button></td>
                            </tr>";
                        $index++;
                    }
                }
                ?>
            </tbody>
        </table>
    </div>



    <div class="modal fade" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adding New Contacts</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add-contacts-form" name="add-contacts-form" method="post" action="#">
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" class="form-control" id="first-name" name="first-name">
                        </div>
                        <div class="form-group">
                            <label for="middle-initial">Middle Name</label>
                            <input type="text" class="form-control" id="middle-name" name="middle-name">
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input type="text" class="form-control" id="last-name" name="last-name">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <div class="form-group">
                            <label for="contact-number">Contact Number</label>
                            <input type="text" class="form-control" id="contact-number" name="contact-number">
                        </div>
                        <div class="form-submit">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Deleting Contacts</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    This will permanently remove this contacts on any records. Are you sure?
                </div>

                <div class="modal-footer">
                  

                    <form id="delete-form-req" action="" method="post" action="#">

                        <input type="hidden" class="index-remove" name="index-remove" id="index-remove"/>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">I know what I'm doing</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="../../Controllers/Contacts/delete.js"></script>

</html>