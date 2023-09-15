<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>

<body>
    <main>
        <h2>Welcome</h2>

        <form action="./dashboard_Create_Client_func.php" method="post">
            <div class="container">
                <h2>Create Clients</h2>

                <label for="company_name">Company Name</label>
                <input name="company_name" type="text" class="form-control" id="company_name">

                <label for="contact_person">Contact Person</label>
                <input name="contact_person" type="text" class="form-control" id="contact_person">

                <label for="phone">Phone</label>
                <input name="phone" type="tel" class="form-control" id="phone">

                <label for="address">address</label>
                <input name="address" type="text" class="form-control" id="address">

                <label for="created_by">Created by</label>
                <input name="created_by" type="text" class="form-control" id="created_by">

                <label for="created_at">Created at</label>
                <input name="created_at" type="date" class="form-control" id="created_at">

                <label for="edited_at">Edited at</label>
                <input name="edited_at" type="date" class="form-control" id="edited_at">
                <br>
                <button type="submit">Submit</button>
            </div>
        </form>
        <form action="index.php" method="post">
            <button type="submit" name="logout">log out</button>
        </form>
    </main>
</body>

</html>