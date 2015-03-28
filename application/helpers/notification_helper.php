<?php

/**
 * Set notification to flashdata
 *
 * @param string $type The type of notification to show (success, warning, info, danger)
 * @param string $message The notification message
 */
function set_notif($type, $message)
{
    $CI = & get_instance();
    $existing_alerts = $CI->session->flashdata('alerts');
    $alert = array (
        'type' => $type,
        'message' => $message
    );
    if ( ! is_array($existing_alerts))
    {
        $existing_alerts = array ();
    }
    array_push($existing_alerts, $alert);
    $CI->session->set_flashdata('alerts', $existing_alerts);
}

/**
 * Get all notification set
 *
 * @return HTML-DOM The DOM to display
 */
function get_notif()
{
    $CI = & get_instance();
    $alerts = $CI->session->flashdata('alerts');
    $notif = '';
    if (is_array($alerts))
    {
        foreach ($alerts as $alert)
        {
            $notif .= _make_alert($alert['type'], $alert['message']);
        }
    }
    return $notif;
}

/**
 * Construct the DOM to display the notification
 *
 * This method assumes the use of bootstrap alert
 *
 * @todo make notification different height
 *
 * @param string $type The type of notification to show (success, warning, info, danger)
 * @param type $message The notification message
 * @return HTML-DOM The DOM to display
 */
function _make_alert($type, $message)
{
    if ($type == 'success')
    {
        $icon = 'check';
    }
    else if ($type == 'danger')
    {
        $icon = 'ban';
    }
    else
    {
        $icon = $type;
    }

    $dom = '<div class="alert alert-' . $type . ' alert-dismissable fade in no-transition" role="alert">';
    $dom .='<i class="fa fa-' . $icon . '"></i>';
    $dom .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    $dom .= '<span aria-hidden="true">&times;</span>';
    $dom .= '</button>';
    $dom .= $message;
    $dom .= '</div>';
    return $dom;
}

/* End of file notification_helper.php */
/* Location: ./application/helpers/notification_helper.php */