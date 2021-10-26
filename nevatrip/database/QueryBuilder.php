<?php


class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    function getAll($table)
    {
       // $sql = "SELECT * FROM {$table}";
       // $sql = "SELECT * FROM {$table} INNER JOIN order_tickets, ticket_prices";


        $sql = "SELECT * FROM {$table}  JOIN order_tickets ON {$table}.id = order_tickets.id  JOIN
         ticket_prices ON order_tickets.id = ticket_prices.id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

    function getOne($table, $id)
    {
        $sql = "SELECT * FROM {$table} WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(['id' => $id]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

    public function create($table, $data)
    {
        $sql = "INSERT INTO {$table} (event_id, event_date, ticket_adult_price, ticket_adult_quantity, ticket_kid_price, ticket_kid_quantity)
            VALUES (:event_id, :event_date, :ticket_adult_price, :ticket_adult_quantity, :ticket_kid_price, :ticket_kid_quantity)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);

    }

    public function update($table, $date, $id)
    {
        $date['id'] = $id;
        $sql = "UPDATE {$table} SET event_id=:event_id,
        event_date=:event_date, ticket_adult_price=:ticket_adult_price, 
        ticket_adult_quantity=:ticket_adult_quantity, ticket_kid_price=:ticket_kid_price,
        ticket_kid_quantity=:ticket_kid_quantity WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute($date);
        

    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM {$table} INNER JOIN order_tickets, ticket_prices WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(['id' => $id]);
    }
}
