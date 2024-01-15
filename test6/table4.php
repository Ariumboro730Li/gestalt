

<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-5">
        
        <div class="table-responsive">
            
            
            <h1>Table Customer menyewa lebih dari 10 kali</h1>
            <a
                name=""
                id=""
                class="btn btn-primary"
                href="index.php"
                role="button"
                >Index</a
            >
            
            <?php

            $having10 = 'SELECT Customer.id as CustomerID, Customer.name as CustomerName, COUNT(Rent.Book_id) as RentCount
            FROM Customer
            JOIN Rent ON Rent.Customer_id = Customer.id
            GROUP BY Customer.id, Customer.name
            HAVING COUNT(Rent.Book_id) > 10
            ';

            $stmtHav10 = $conn->query($having10);
            $rowsHav10 = $stmtHav10->fetchAll(PDO::FETCH_ASSOC);

            foreach ($rowsHav10 as $key => $value) {
                $ids[] = $value['CustomerID'];
            }

            $query = '
                SELECT buku.id,Customer.id as custId, Customer.name,  buku.Title, buku.Author, buku.Price_rent, buku.Book_category, Rent.Book_id, count(buku.id) as total FROM Buku 
                left join Rent on Rent.Book_id = Buku.id
                join customer on Rent.Customer_id = customer.id
                    where rent.Book_id is not  null
                    and Customer.id in (' . implode(',', $ids) . ')
                group by buku.id, customer.id
            ';
            
            $stmt = $conn->query($query);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID </th>
                        <th scope="col">Customer </th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Price Rent</th>
                        <th scope="col">Book Category</th>
                        <th scope="col">Jumlah Disewa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($rows as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . ($key + 1) . '</td>';
                        echo '<td>' . $value['name'] . '</td>';
                        echo '<td>' . $value['Title'] . '</td>';
                        echo '<td>' . $value['Author'] . '</td>';
                        echo '<td>' . $value['Price_rent'] . '</td>';
                        echo '<td>' . $value['Book_category'] . '</td>';
                        echo '<td>' . $value['total'] . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
