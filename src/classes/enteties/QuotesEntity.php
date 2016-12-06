<?php

/**
 * Created by PhpStorm.
 * User: Anwender
 * Date: 05.12.2016
 * Time: 15:12
 */
class QuotesEntity implements JsonSerializable
{
    private $id;
    private $content;
    private $date;
    private $author;

    public function __construct(array $data)
    {
        $this->id = isset($data['id']) ? $data['id'] : null;
        $this->content = isset($data['content']) ? $data['content'] : null;
        $this->date = isset($data['date']) ? $data['date'] : null;
        $this->author = isset($data['author']) ? $data['author'] : null;
    }

    /**
     * @return mixed|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed|null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed|null
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed|null
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    function jsonSerialize()
    {
        return get_object_vars($this);
    }
}