<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UsersModel extends Model
{
    /**
     * Database table this model represents.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * Primary key of the table.
     *
     * @var string
     */
    protected $primary_key = 'id';

    public function __construct()
    {
        parent::__construct();
        $this->table = $this->resolve_users_table();
    }

    /**
     * Prefer the table that actually stores hashed user credentials.
     * Older project installs used `user`; newer docs refer to `users`.
     */
    private function resolve_users_table(): string
    {
        foreach (['user', 'users'] as $table) {
            try {
                $columns = $this->db->raw('DESCRIBE `' . $table . '`')->fetchAll(PDO::FETCH_COLUMN);
                if (in_array('password', $columns, true)) {
                    return $table;
                }
            } catch (Throwable $e) {
                // Keep falling back to the documented table name.
            }
        }

        return 'users';
    }
}
