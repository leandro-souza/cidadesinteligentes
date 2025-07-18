<?php
/**
 * Single Event Meta (Details) Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe-events/modules/meta/details.php
 *
 * @package TribeEventsCalendar
 */


$time_format = get_option( 'time_format', Tribe__Date_Utils::TIMEFORMAT );
$time_range_separator = tribe_get_option( 'timeRangeSeparator', ' - ' );

$start_datetime = tribe_get_start_date();
$start_date = tribe_get_start_date( null, false );
$start_time = tribe_get_start_date( null, false, $time_format );
$start_ts = tribe_get_start_date( null, false, Tribe__Date_Utils::DBDATEFORMAT );

$end_datetime = tribe_get_end_date();
$end_date = tribe_get_display_end_date( null, false );
$end_time = tribe_get_end_date( null, false, $time_format );
$end_ts = tribe_get_end_date( null, false, Tribe__Date_Utils::DBDATEFORMAT );

$time_formatted = null;
if ( $start_time == $end_time ) {
	$time_formatted = esc_html( $start_time );
} else {
	$time_formatted = esc_html( $start_time . $time_range_separator . $end_time );
}

$event_id = Tribe__Main::post_id_helper();

/**
 * Returns a formatted time for a single event
 *
 * @var string Formatted time string
 * @var int Event post id
 */
$time_formatted = apply_filters( 'tribe_events_single_event_time_formatted', $time_formatted, $event_id );

/**
 * Returns the title of the "Time" section of event details
 *
 * @var string Time title
 * @var int Event post id
 */
$time_title = apply_filters( 'tribe_events_single_event_time_title', esc_html__( 'Time:', 'governlia' ), $event_id );

$cost = tribe_get_formatted_cost();
$website = tribe_get_event_website_link();
?>

<div class="tribe-events-meta-group tribe-events-meta-group-details info-block">
	<h3 class="tribe-events-single-section-title"> <?php esc_html_e( 'Event Details', 'governlia' ) ?> </h3>
	<ul class="list">

		<?php
		do_action( 'tribe_events_single_meta_details_section_start' );

		// All day (multiday) events
		if ( tribe_event_is_all_day() && tribe_event_is_multiday() ) :
			?>

			<li><span class="icon flaticon-time"></span> <?php esc_html_e( 'Start:', 'governlia' ) ?>
				<abbr class="tribe-events-abbr tribe-events-start-datetime published dtstart" title="<?php esc_attr( $start_ts ) ?>"> <?php echo wp_kses( $start_date, true ) ?> </abbr>
			</li>

			<li><span class="icon flaticon-time"></span> <?php esc_html_e( 'End:', 'governlia' ) ?>
				<abbr class="tribe-events-abbr dtend" title="<?php esc_attr( $end_ts ) ?>"> <?php echo wp_kses( $end_date, true ) ?> </abbr>
			</li>

		<?php
		// All day (single day) events
		elseif ( tribe_event_is_all_day() ):
			?>

			<li> <span class="icon flaticon-time"></span> <?php esc_html_e( 'Date:', 'governlia' ) ?>
				<abbr class="tribe-events-abbr tribe-events-start-datetime published dtstart" title="<?php esc_attr( $start_ts ) ?>"> <?php echo wp_kses( $start_date, true ) ?> </abbr>
			</li>

		<?php
		// Multiday events
		elseif ( tribe_event_is_multiday() ) :
			?>

			<li> <span class="icon flaticon-time"></span> <?php esc_html_e( 'Start:', 'governlia' ) ?>
				<abbr class="tribe-events-abbr updated published dtstart" title="<?php esc_attr( $start_ts ) ?>"> <?php echo wp_kses( $start_datetime, true ); ?> </abbr>
			</li>

			<li> <span class="icon flaticon-time"></span> <?php esc_html_e( 'End:', 'governlia' ) ?>
				<abbr class="tribe-events-abbr dtend" title="<?php esc_attr( $end_ts ) ?>"> <?php echo wp_kses( $end_datetime, true ) ?> </abbr>
			</li>

		<?php
		// Single day events
		else :
			?>

			<li> <span class="icon fa fa-calendar"></span> <?php esc_html_e( 'Date:', 'governlia' ) ?>
				<abbr class="tribe-events-abbr tribe-events-start-date published dtstart" title="<?php esc_attr( $start_ts ) ?>"> <?php echo wp_kses( $start_date, true ) ?> </abbr>
			</li>

			<li> <span class="icon fa fa-clock-o"></span><?php echo esc_html( $time_title ); ?>
				<span class="tribe-events-abbr tribe-events-start-time published dtstart" title="<?php esc_attr( $end_ts ) ?>">
					<?php echo wp_kses($time_formatted, true); ?>
				</span>
			</li>

		<?php endif ?>

		<?php
		// Event Cost
		if ( ! empty( $cost ) ) : ?>

			<li> <?php esc_html_e( 'Cost:', 'governlia' ) ?>
				<span class="tribe-events-event-cost"> <?php echo wp_kses( $cost, true ); ?> </span>
			</li>
		<?php endif ?>
        
		<li>
		<?php
		echo tribe_get_event_categories(
			get_the_id(), array(
				'before'       => '',
				'sep'          => ', ',
				'after'        => '',
				'label'        => null, // An appropriate plural/singular label will be provided
				'label_before' => '',
				'label_after'  => '',
				'wrap_before'  => '',
				'wrap_after'   => '',
			)
		);
		?>
        </li>

		<?php echo tribe_meta_event_tags( sprintf( esc_html__( '%s Tags:', 'governlia' ), tribe_get_event_label_singular() ), ', ', false ) ?>

		<?php
		// Event Website
		if ( ! empty( $website ) ) : ?>

			<li> <?php esc_html_e( 'Website:', 'governlia' ) ?> 
				<span class="tribe-events-event-url"> <?php echo wp_kses($website, true); ?> </span>
			</li>
		<?php endif ?>

		<?php do_action( 'tribe_events_single_meta_details_section_end' ) ?>
	</ul>
</div>
