<?php

namespace App\Services;

use App\Models\Event;

class EventIcsGenerator
{
    public static function generate(Event $event): string
    {
        $host = parse_url(config('app.url'), PHP_URL_HOST) ?: 'fumc.local';

        $lines = [
            'BEGIN:VCALENDAR',
            'VERSION:2.0',
            'PRODID:-//FUMC//Upcoming Events//EN',
            'CALSCALE:GREGORIAN',
            'METHOD:PUBLISH',
            'BEGIN:VEVENT',
            'UID:event-'.$event->id.'@'.$host,
            'DTSTAMP:'.now()->utc()->format('Ymd\THis\Z'),
            'DTSTART;VALUE=DATE:'.$event->starts_at->format('Ymd'),
            'DTEND;VALUE=DATE:'.$event->starts_at->copy()->addDay()->format('Ymd'),
            'SUMMARY:'.self::escape($event->title),
            'TRANSP:TRANSPARENT',
            'END:VEVENT',
            'END:VCALENDAR',
        ];

        return implode("\r\n", $lines)."\r\n";
    }

    private static function escape(string $value): string
    {
        return str_replace(
            ['\\', ';', ',', "\r\n", "\n", "\r"],
            ['\\\\', '\\;', '\\,', '\\n', '\\n', '\\n'],
            $value,
        );
    }
}
