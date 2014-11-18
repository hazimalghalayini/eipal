<?php

class News_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function do_add_news($data) {
        $query = $this->db->insert('news', $data);
        return $query;
    }

    function add_agenda($data) {
        $query = $this->db->insert('agenda', $data);
        return $query;
    }

    function get_agenda_count($data = NULL) {
        !empty($data['i_search']) ? $this->db->like('news_description', $data['i_search']) : '';
        return $this->db->count_all_results('agenda');
    }

    //for front_end
    function all_agenda($limit, $start) {
        $this->db->order_by('publish_date', 'DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get('agenda');

        return $query->result_array();
    }

    function get_all_agenda($data) {
        $this->db->limit($data['i_end_index'], $data['i_start_index']);
        !empty($data['i_search']) ? $this->db->like('news_description', $data['i_search']) : '';
        $this->db->order_by('publish_date', 'DESC');
        $query = $this->db->get('agenda');

        return $query->result_array();
    }

    function get_agenda_info($news_id) {
        $this->db->select('*');
        $this->db->where('news_id', $news_id);
        $query = $this->db->get('agenda');

        return $query->row_array();
    }

    function update_agenda_info($news_id, $data) {
        $this->db->where('news_id', $news_id);
        $query = $this->db->update('agenda', $data);
        return $query;
    }

    function delete_agenda($news_id) {
        $this->db->where('news_id', $news_id);
        $query = $this->db->delete('agenda');
        return $query;
    }

    function get_all_news($data) {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->join('news_categories', 'news.category_id = news_categories.category_id');
        !empty($data['category_id']) ? $this->db->where('news.category_id', $data['category_id']) : '';
        !empty($data['i_search']) ? $this->db->like('news_title', $data['i_search']) : '';
        $this->db->limit($data['i_end_index'], $data['i_start_index']);
        $this->db->order_by('publish_date', 'DESC');
        $query = $this->db->get();

        return $query->result_array();
    }

    function get_news_count($data = NULL) {
//        !empty($data['category_id']) ? $this->db->where('news.category_id', $data['category_id']) : '';
        !empty($data['i_search']) ? $this->db->like('news_title', $data['i_search']) : '';
        return $this->db->count_all_results('news');
    }

    function get_news_info($news_id) {
        $this->db->select('news.* , count(comments.comment_id) as comments_count, news_categories.category_name');
        $this->db->join('comments', 'comments.news_id=news.news_id', 'left');
        $this->db->join('news_categories', 'news.category_id = news_categories.category_id', 'left');
        $query = $this->db->get_where('news', array('news.news_id' => $news_id, 'comments.status' => 1));
        return $query->row_array();
    }

    function categories_count() {
        $this->db->select('COUNT(news_id) as news_count,news_categories.category_name');
        $this->db->join('news_categories', 'news.category_id = news_categories.category_id', 'right');
        $this->db->group_by('news_categories.category_id');
        $query = $this->db->get('news');
        return $query->result();
    }

    function news_most_viewed($orderBy = NULL, $limit = 10) {
        !empty($orderBy) ? $this->db->order_by($orderBy, 'desc') : $this->db->order_by('publish_date', 'desc');
        $this->db->limit($limit);
        $this->db->select('news_id, news_title, publish_date,views');
        $query = $this->db->get('news');
        return $query->result_array();
    }

    function get_news($limit, $start) {
        $this->db->select('news.*,COUNT(comment_id) as comments_count,news_categories.category_name');
        $this->db->join('comments', 'news.news_id = comments.news_id', 'left');
        $this->db->join('news_categories', 'news.category_id = news_categories.category_id', 'left');
        $this->db->group_by('news.news_id');
        $this->db->order_by('publish_date', 'DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get('news');
        return $query->result();
    }

    function update_news($news_id, $data) {
        $this->db->where('news_id', $news_id);
        $query = $this->db->update('news', $data);
        return $query;
    }

    function delete_news($news_id) {
        $this->db->where('news_id', $news_id);
        $query = $this->db->delete('news');
        return $query;
    }

    function get_comments($data) {
        $this->db->select('*');
        $this->db->from('comments');
//        $this->db->join('news', 'news.news_id = comments.news_id');
        $this->db->where('news_id', $data['news_id']);
        !empty($data['i_search']) ? $this->db->like('name', $data['i_search']) : '';
        $this->db->limit($data['i_end_index'], $data['i_start_index']);
        $this->db->order_by('publishDate', 'DESC');
        $query = $this->db->get();

        return $query->result_array();
    }

    function get_comments_count($data = NULL) {
        !empty($data['news_id']) ? $this->db->where('news_id', $data['news_id']) : '';
        !empty($data['i_search']) ? $this->db->like('name', $data['i_search']) : '';
        !empty($data['i_search']) ? $this->db->like('comment', $data['i_search']) : '';
        return $this->db->count_all_results('comments');
    }

    function get_recent_comments($data = NULL) {
        $this->db->select('comments.*,news.news_title');
        $this->db->from('comments');
        $this->db->join('news', 'news.news_id = comments.news_id');
        !empty($data['i_search']) ? $this->db->like('name', $data['i_search']) : '';
        $this->db->limit($data['i_end_index'], $data['i_start_index']);
        $this->db->order_by('status ASC, publishDate DESC');
        $query = $this->db->get();

        return $query->result_array();
    }

    function latest_comments($count = 10) {
        $this->db->select('comments.*,news.news_title');
        $this->db->from('comments');
        $this->db->join('news', 'news.news_id = comments.news_id');
        $this->db->where(array('status' => '0'));
        $this->db->limit($count);
        $query = $this->db->get();

        return $query->result_array();
    }

    function get_recent_comments_count($data = NULL) {
        !empty($data['i_search']) ? $this->db->like('name', $data['i_search']) : '';
        !empty($data['i_search']) ? $this->db->like('comment', $data['i_search']) : '';
        return $this->db->count_all_results('comments');
    }

    function getNotifications() {
        $this->db->where(array('status' => 0));
        $data['comments_count'] = $this->db->count_all_results('comments');
        $data['latest_comments'] = $this->latest_comments(6);
        $data['latest_messages'] = $this->get_latest_messages(6);
        return $data;
    }

    function change_comment_status($data) {
        $this->db->where('comment_id', $data['comment_id']);
        $query = $this->db->update('comments', array('status' => ($data['current_status'] == 0) ? 1 : 0));
        return $query;
    }

    function latest_news() {
        $this->db->select('news.*,COUNT(comment_id) as comments_count,news_categories.category_name');
        $this->db->join('comments', 'news.news_id = comments.news_id', 'left');
        $this->db->join('news_categories', 'news.category_id = news_categories.category_id', 'left');
        $this->db->group_by('news.news_id');
        $this->db->order_by('publish_date', 'DESC');
        $this->db->limit(5);
        $query = $this->db->get('news');
        return $query->result();
    }

    function postView($postId) {
        $this->db->select('views');
        $query1 = $this->db->get('news');
        $views = $query1->row_array();
        $this->db->where('news_id', $postId);
        $query = $this->db->update('news', array('views' => $views['views'] + 1));
        return $query;
    }

    function insertComment($data) {
        $query = $this->db->insert('comments', $data);
        return $query;
    }

    function insertContactMsg($data) {
        $query = $this->db->insert('contactMsg', $data);
        return $query;
    }

    function insertSubscribeEmail($data) {
        $query = $this->db->insert('newsletter', $data);
        return $query;
    }

    function getPostComment($postId = NULL, $limit = 10) {
        !empty($postId) ? $this->db->where('news_id', $postId) : '';
        $this->db->limit($limit);
        $this->db->select('name, comment, publishDate,news_id');
        $this->db->order_by('publishDate');
        $query = $this->db->get_where('comments', array('status' => 1));

        return $query->result();
    }

    function commentCount($postId) {
        $this->db->where('news_id', $postId);
        $query = $this->db->count_all_results('comments');
        return $query;
    }

    function search($text, $limit = 6, $start = 0) {
        $this->db->select('news.*,COUNT(comment_id) as comments_count,news_categories.category_name');
        $this->db->join('comments', 'news.news_id = comments.news_id', 'left');
        $this->db->join('news_categories', 'news.category_id = news_categories.category_id', 'left');
        $this->db->group_by('news.news_id');
        $this->db->limit($limit, $start);
        $this->db->like('news_title', $text);
        $this->db->or_like('news_description', $text);
        $this->db->order_by('publish_date', 'DESC');
        $query = $this->db->get('news');
        return $query->result();
    }

    function search_count($text = NULL) {
        $this->db->like('news_title', $text);
        $this->db->or_like('news_description', $text);
        return $this->db->count_all_results('news');
    }

    function get_messages_count() {
        return $this->db->count_all_results('contactmsg');
    }

    function get_latest_messages() {
        $this->db->from('contactmsg');
        $this->db->limit(6);
        $query = $this->db->get();

        return $query->result_array();
    }

}
