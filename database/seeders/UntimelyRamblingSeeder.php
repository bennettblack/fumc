<?php

namespace Database\Seeders;

use App\Models\UntimelyRambling;
use Illuminate\Database\Seeder;

class UntimelyRamblingSeeder extends Seeder
{
    public function run(): void
    {
        $entries = [
            [
                'days_ago' => 8,
                'title' => 'On Patience and Spring Gardens',
                'body' => <<<'HTML'
                    <p>Every April I make the same mistake. I buy my seedlings too early, set them out too proudly, and wait for the last frost to wound them. You would think, after twenty-odd years of the same disappointment, I would have learned.</p>
                    <p>This year I watched the forecast like a hawk. I checked soil temperatures. I talked to Roger down at the hardware store about what he had seen. And still — a cold snap the week after Easter, and three of my tomato plants looked like they had been punished for something.</p>
                    <p>I think the garden teaches us more about prayer than any book I have read. Most of what I planted is still underground, doing something I cannot see. My job is only to water it and wait. The work is not mine. The timing is not mine. The rain is not mine.</p>
                    <p>There is a line I keep returning to this week: <em>the harvest is plentiful, but the laborers are few</em>. Some seasons, maybe, the labor is simply to be patient — to resist the urge to dig up what the Lord has only just planted.</p>
                    HTML,
            ],
            [
                'days_ago' => 21,
                'title' => 'What the Youngest Voice Taught Me',
                'body' => <<<'HTML'
                    <p>During the offertory last Sunday, the little boy in the pew behind me — I think he is about four — leaned over and told his mother, very seriously, "God gave me two dollars for this." I heard her laugh under her breath, the gentle laugh of a mother who has been up since five.</p>
                    <p>He said it again, louder, as if he were worried she had not understood the stakes. "God gave me two dollars, so now I give God the two dollars back."</p>
                    <p>I have been in seminary. I have sat through stewardship campaigns that cost more to print than they ever raised. I have heard sermons on giving that were so subtle you could miss them entirely. And none of them said it as cleanly as that boy did.</p>
                    <p>I do not know what else to do with this story except tell it.</p>
                    HTML,
            ],
            [
                'days_ago' => 35,
                'title' => 'Holy Week in a Hurry',
                'body' => <<<'HTML'
                    <p>I meant to do Lent properly this year. I had a plan. I bought a little devotional book from the Cokesbury catalog, the kind with a ribbon marker. I got as far as the third Sunday.</p>
                    <p>Then the faucet in the fellowship hall started dripping, and the copier decided to retire early, and somewhere in there my mother-in-law fell and we spent a week in Nashville, and by the time I caught my breath it was Palm Sunday and I had not been quiet for forty days in a row.</p>
                    <p>I used to feel guilty about this. I still feel guilty about it, a little. But I am beginning to wonder if the interruptions are not the point. The disciples did not keep Lent, as far as I can tell. They kept company with Jesus, and most of what they did was follow along and get things wrong.</p>
                    <p>Holy Week arrived anyway. The cross did its work anyway. Easter came, as it always does, without waiting to see if I was ready.</p>
                    HTML,
            ],
            [
                'days_ago' => 55,
                'title' => 'Late Again, Grateful Anyway',
                'body' => <<<'HTML'
                    <p>I was late to worship again on Sunday. Not catastrophically late — the processional was still moving — but late enough that I had to slide into the back pew with the expression of a woman who has lost a battle with her hair dryer.</p>
                    <p>Here is what I noticed, from the back pew: the shape of my own church looks different from there. You can see which children are squirming, which couples are holding hands, which widows are singing from memory with their eyes closed. You can see the choir breathe together before the anthem.</p>
                    <p>From the back, you can see everyone facing the same direction. That is the thing the front never shows you.</p>
                    HTML,
            ],
            [
                'days_ago' => 75,
                'title' => 'The Hymnal My Grandmother Marked',
                'body' => <<<'HTML'
                    <p>My grandmother died in 1998, but I still have her hymnal. It is a 1966 Methodist hymnal, maroon cover, gold lettering rubbed off where her thumb used to rest. The spine is held together with prayer and packing tape.</p>
                    <p>What I love about it is the margins. She wrote in the margins. Not a lot — a star next to a verse, a date in pencil, once in a while a name. Hymn 384 has a small <em>Ruth</em> in the margin, and I know that was for my aunt Ruth who loved it. Hymn 117 has a date from the week my grandfather died.</p>
                    <p>I grew up thinking of the hymnal as a fixed object, the same book in every pew, the same song on every page. My grandmother's hymnal is different. Hers is a journal of a life kept alongside the Church's life — two timelines running down the same page.</p>
                    <p>I have been thinking about making my own marks, finally. I do not want my grandchildren to open an unread book.</p>
                    HTML,
            ],
            [
                'days_ago' => 100,
                'title' => 'On Forgiving Slowly',
                'body' => <<<'HTML'
                    <p>I used to think forgiveness happened the way a light switch happens: off, and then on. You decided, and it was done. Something, something, letting go.</p>
                    <p>That is not how it has worked for me. Forgiveness, in my experience, is more like healing from a deep bruise. You notice it less often than you used to. You forget about it for a while and then bump into it again and are surprised it still hurts. You wonder if you ever really forgave at all.</p>
                    <p>I take some comfort in the passage where Peter asks how many times he has to forgive his brother. Seven times, maybe? And Jesus tells him: seventy-seven. I used to hear that as a heroic demand. Lately I hear it as a description. Some wounds require seventy-seven forgivings before the healing finishes.</p>
                    <p>God does not seem to be in a hurry about this. Neither, I think, should I be.</p>
                    HTML,
            ],
            [
                'days_ago' => 140,
                'title' => 'Ordinary Grace',
                'body' => <<<'HTML'
                    <p>I have been looking for God in big places again. Mountaintop experiences. Capital-M Moments. I know better, but I keep doing it anyway.</p>
                    <p>Here is where I actually found Him this week: in a casserole left on my porch without a note. In the way my neighbor's porch light stayed on until I got home. In a hymn I did not know I remembered. In a five-minute phone call with a friend I have not seen since 1994.</p>
                    <p>The God I keep meeting is not very impressive, by the world's standards. He is small and persistent and extraordinarily kind. He does not make a fuss. He leaves casseroles.</p>
                    HTML,
            ],
            [
                'days_ago' => 170,
                'title' => 'What the Bell Tower Heard',
                'body' => <<<'HTML'
                    <p>I was up in the bell tower last week with Frank — we were checking on a pigeon situation, which is a sentence I never expected to write — and I got to thinking about how long that bell has been ringing.</p>
                    <p>1923. The Harding administration. My grandparents were not born yet. My great-grandparents, in Arkansas, had never heard of this town.</p>
                    <p>And the bell has rung for every one of the Sundays in between. For weddings. For funerals. For the ends of two wars. For three pandemics, if you count the one everyone forgets. For every baby baptized in the sanctuary downstairs.</p>
                    <p>I do not know what I did with that realization, exactly. I stood there for a minute longer than I needed to. I touched the rope. I came back down the ladder slow.</p>
                    HTML,
            ],
        ];

        foreach ($entries as $entry) {
            UntimelyRambling::create([
                'title' => $entry['title'],
                'body' => $entry['body'],
                'published_at' => now()->subDays($entry['days_ago'])->startOfDay(),
            ]);
        }
    }
}
