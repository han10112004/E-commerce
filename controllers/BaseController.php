<?php

class BaseController {
    public function basePagination($query, $params = [], $page = 1, $limit = 10) {
        $pdo = Database::connect();

        $countQuery = "SELECT COUNT(*) as total FROM (" . $query . ") as sub";
        $countStmt = $pdo->prepare($countQuery);
        $countStmt->execute($params);
        $total = $countStmt->fetch(PDO::FETCH_ASSOC)['total'];

        $totalPages = $limit > 0 ? ceil($total / $limit) : 1;
        $offset = ($page - 1) * $limit;

        $pagedQuery = $query . " LIMIT :limit OFFSET :offset";
        $stmt = $pdo->prepare($pagedQuery);

        foreach ($params as $key => $value) {
            $stmt->bindValue(is_int($key) ? $key+1 : $key, $value);
        }

        $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);

        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return [
            'data' => $data,
            'total' => $total,
            'page' => $page,
            'limit' => $limit,
            'total_pages' => $totalPages
        ];
    }
}
