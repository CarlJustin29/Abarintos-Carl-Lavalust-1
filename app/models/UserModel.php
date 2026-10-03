<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Model: UserModel
 * 
 * Automatically generated via CLI.
 */
class UserModel extends Model {
    protected $table = 'users';
    protected $primary_key = 'id';
    protected $fillable = [];
    protected $guarded = ['id'];

    public function __construct()
    {
        parent::__construct();
        $this->table = $this->resolve_user_table();
    }

    private function resolve_user_table(): string
    {
        foreach (['user', 'users'] as $table) {
            try {
                $columns = $this->db->raw('DESCRIBE `' . $table . '`')->fetchAll(PDO::FETCH_COLUMN);
                if (in_array('password', $columns, true)) {
                    return $table;
                }
            } catch (Throwable $e) {
                // Keep falling back to the default table name.
            }
        }

        return 'users';
    }
}