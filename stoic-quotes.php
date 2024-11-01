<?php
/**
 * Plugin Name: Stoic Quotes
 * Description: Get stoic quotes displayed within your WordPress admin dashboard.
 * Version: 1.0.2
 * Author: hookandhook
 * License: GPLv2
 */


if (!defined('ABSPATH')) {
    die();
}

function hahsq_add_dashboard_widgets() {
	wp_add_dashboard_widget(
		'hahsq_dashboard_widget',                         
		esc_html__( 'Stoic Quotes', 'sq' ), 
		'hahsq_dashboard_widget_render'                    
	); 
}
add_action( 'wp_dashboard_setup', 'hahsq_add_dashboard_widgets' );

function hahsq_dashboard_widget_render() {
    $quotes = [
        '"You have power over your mind - not outside events. Realize this, and you will find strength." - Marcus Aurelius',
        '"Luck is what happens when preparation meets opportunity." - Seneca',
        '"It is impossible for a man to learn what he thinks he already knows." - Epictetus',
        '"The best answer to anger is silence." - Marcus Aurelius',
        '"Begin at once to live, and count each separate day as a separate life." - Seneca',
        '"They lose the day in expectation of the night, and the night in fear of the dawn." - Seneca',
        '"Better to trip with the feet than with the tongue." - Zeno',
        '"No man is free who is not master of himself." - Epictetus',
        '"How ridiculous and how strange to be surprised at anything which happens in life." - Marcus Aurelius',
        '"Be tolerant with others and strict with yourself." - Marcus Aurelius',
        '"Reject your sense of injury and the injury itself disappears." - Marcus Aurelius',
        '"Sometimes even to live is an act of courage." - Seneca',
        '"Wealth is the slave of the wise. The master of the fool." - Seneca',
        '"He suffers more than necessary, who suffers before it is necessary." - Seneca',
        '"It is not that we have so little time but that we lose so much. ... The life we receive is not short but we make it so; we are not ill provided but use what we have wastefully." - Seneca',
        '"It is the power of the mind to be unconquerable." - Seneca',
        '"It is not the man who has too little, but the man who craves more, that is poor." - Seneca',
        '"You act like mortals in all that you fear, and like immortals in all that you desire." - Seneca',
        '"Receive without conceit, release without struggle." - Marcus Aurelius',
        '"Be content to seem what you really are." - Marcus Aurelius',
        '"The soul becomes dyed with the color of its thoughts." - Marcus Aurelius',
        '"Man conquers the world by conquering himself." - Zeno',
        '"Waste no more time arguing about what a good man should be. Be one." - Marcus Aurelius',
        '"Whoever does not regard what he has as most ample wealth, is unhappy, though he be master of the world." - Epictetus',
        '"The worst ruler is one who cannot rule himself." - Cato',
        '"We have two ears and one mouth, so we should listen more than we say." - Zeno',
        '"The goal of life is living in agreement with Nature." - Zeno',
        '"Well-being is attained little by little, and nevertheless is no little thing itself." - Zeno',
        '"The more we value things outside our control, the less control we have." - Marcus Aurelius',
        '"It is not events that disturb people, it is their judgements concerning them." - Marcus Aurelius',
        '"To love only what happens, what was destined. No greater harmony." - Marcus Aurelius',
        '"True happiness is to enjoy the present, without anxious dependence upon the future, not to amuse ourselves with either hopes or fears but to rest satisfied with what we have, which is sufficient, for he that is so, wants nothing." - Seneca',
        '"Throw me to the wolves and I will return leading the pack." - Seneca',
        '"Difficulties strengthen the mind, as labor does the body." - Seneca',
        '"Associate with people who are likely to improve you." - Seneca',
        '"Man is affected not by events but by the view he takes of them." - Seneca',
        '"We suffer more often in imagination than in reality." - Seneca',
        '"You want to live but do you know how to live? You are scared of dying and tell me, is the kind of life you lead really any different from being dead?" - Seneca',
        '"Time heals what reason cannot." - Seneca',
        '"The greatest blessings of mankind are within us and within our reach. A wise man is content with his lot, whatever it may be, without wishing for what he has not." - Seneca',
        '"Hang on to your youthful enthusiasms - you\'ll be able to use them better when you\'re older." - Seneca',
        '"If a man knows not to which port he sails, no wind is favorable." - Seneca',
        '"The bravest sight in the world is to see a great man struggling against adversity." - Seneca',
        '"Until we have begun to go without them, we fail to realize how unnecessary many things are. We\'ve been using them not because we needed them but because we had them." - Seneca',
        '"Life is never incomplete if it is an honorable one. At whatever point you leave life, if you leave it in the right way, it is whole." - Seneca',
        '"He who follows reason in all things is both tranquil and active at the same time, and also cheerful and collected." - Marcus Aurelius',
        '"You\'re subject to sorrow, fear, jealousy, anger and inconsistency. That\'s the real reason you should admit that you are not wise." - Marcus Aurelius',
        '"Receive without pride, let go without attachment." - Marcus Aurelius',
        '"I have often wondered how it is that every man loves himself more than all the rest of men, but yet sets less value on his own opinions of himself than on the opinions of others." - Marcus Aurelius',
        '"Today I escaped anxiety. Or no, I discarded it, because it was within me, in my own perceptions - not outside." - Marcus Aurelius',
        '"We have two ears and one mouth so that we can listen twice as much as we speak." - Epictetus',
        '"Men are disturbed not by things, but by the view which they take of them." - Epictetus',
        '"Make the best use of what is in your power, and take the rest as it happens." - Epictetus',
        '"A ship should not ride on a single anchor, nor life on a single hope." - Epictetus',
        '"No great thing is created suddenly." - Epictetus'
    ];
    $randomQuote = $quotes[rand(0, count($quotes) - 1)];

	esc_html_e( $randomQuote, "sq" );
}