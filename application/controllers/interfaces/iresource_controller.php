<?php

/**
 * An interface for resource controller
 *
 * This interface should be implemented by all resourceful controller
 */
interface iResource_controller {

    /**
     * Display a list of `items`
     *
     * Verb : GET
     * Path : /items
     */
    public function index();

    /**
     * Return an HTML form for creating an `item`
     *
     * Verb : GET
     * Path : /items/new
     */
    public function create_new();

    /**
     * Create a new `item`
     *
     * Verb : GET
     * Path : /items
     */
    public function create();

    /**
     * Display a specific `item`
     *
     * Verb : GET
     * Path : /items/{id}
     *
     * @param int $id The id of the `item`
     */
    public function show($id);

    /**
     * Return the HTML form for editing a single `item`
     *
     * Verb : GET
     * Path : /items/{id}/edit
     *
     * @param int $id The id of the `item`
     */
    public function edit($id);

    /**
     * Update a specific `item`
     *
     * Verb : PUT
     * Path : /items/{id}
     *
     * @param int $id The id of the `item`
     */
    public function update($id);

    /**
     * Delete a specific item
     *
     * Verb : DELETE
     * Path : /items/{id}
     *
     * @param int $id The id of the `item`
     */
    public function delete($id);
}

/* End of file iresource_controller.php */
/* Location: ./application/controllers/interfaces/iresource_controller.php */