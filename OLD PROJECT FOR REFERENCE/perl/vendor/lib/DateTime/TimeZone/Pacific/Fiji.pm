# This file is auto-generated by the Perl DateTime Suite time zone
# code generator (0.07) This code generator comes with the
# DateTime::TimeZone module distribution in the tools/ directory

#
# Generated from /tmp/rnClxBLdxJ/australasia.  Olson data version 2013a
#
# Do not edit this file directly.
#
package DateTime::TimeZone::Pacific::Fiji;
{
  $DateTime::TimeZone::Pacific::Fiji::VERSION = '1.57';
}

use strict;

use Class::Singleton 1.03;
use DateTime::TimeZone;
use DateTime::TimeZone::OlsonDB;

@DateTime::TimeZone::Pacific::Fiji::ISA = ( 'Class::Singleton', 'DateTime::TimeZone' );

my $spans =
[
    [
DateTime::TimeZone::NEG_INFINITY, #    utc_start
60425697856, #      utc_end 1915-10-25 12:04:16 (Mon)
DateTime::TimeZone::NEG_INFINITY, #  local_start
60425740800, #    local_end 1915-10-26 00:00:00 (Tue)
42944,
0,
'LMT',
    ],
    [
60425697856, #    utc_start 1915-10-25 12:04:16 (Mon)
63045525600, #      utc_end 1998-10-31 14:00:00 (Sat)
60425741056, #  local_start 1915-10-26 00:04:16 (Tue)
63045568800, #    local_end 1998-11-01 02:00:00 (Sun)
43200,
0,
'FJT',
    ],
    [
63045525600, #    utc_start 1998-10-31 14:00:00 (Sat)
63055807200, #      utc_end 1999-02-27 14:00:00 (Sat)
63045572400, #  local_start 1998-11-01 03:00:00 (Sun)
63055854000, #    local_end 1999-02-28 03:00:00 (Sun)
46800,
1,
'FJST',
    ],
    [
63055807200, #    utc_start 1999-02-27 14:00:00 (Sat)
63077580000, #      utc_end 1999-11-06 14:00:00 (Sat)
63055850400, #  local_start 1999-02-28 02:00:00 (Sun)
63077623200, #    local_end 1999-11-07 02:00:00 (Sun)
43200,
0,
'FJT',
    ],
    [
63077580000, #    utc_start 1999-11-06 14:00:00 (Sat)
63087256800, #      utc_end 2000-02-26 14:00:00 (Sat)
63077626800, #  local_start 1999-11-07 03:00:00 (Sun)
63087303600, #    local_end 2000-02-27 03:00:00 (Sun)
46800,
1,
'FJST',
    ],
    [
63087256800, #    utc_start 2000-02-26 14:00:00 (Sat)
63395100000, #      utc_end 2009-11-28 14:00:00 (Sat)
63087300000, #  local_start 2000-02-27 02:00:00 (Sun)
63395143200, #    local_end 2009-11-29 02:00:00 (Sun)
43200,
0,
'FJT',
    ],
    [
63395100000, #    utc_start 2009-11-28 14:00:00 (Sat)
63405381600, #      utc_end 2010-03-27 14:00:00 (Sat)
63395146800, #  local_start 2009-11-29 03:00:00 (Sun)
63405428400, #    local_end 2010-03-28 03:00:00 (Sun)
46800,
1,
'FJST',
    ],
    [
63405381600, #    utc_start 2010-03-27 14:00:00 (Sat)
63423525600, #      utc_end 2010-10-23 14:00:00 (Sat)
63405424800, #  local_start 2010-03-28 02:00:00 (Sun)
63423568800, #    local_end 2010-10-24 02:00:00 (Sun)
43200,
0,
'FJT',
    ],
    [
63423525600, #    utc_start 2010-10-23 14:00:00 (Sat)
63435016800, #      utc_end 2011-03-05 14:00:00 (Sat)
63423572400, #  local_start 2010-10-24 03:00:00 (Sun)
63435063600, #    local_end 2011-03-06 03:00:00 (Sun)
46800,
1,
'FJST',
    ],
    [
63435016800, #    utc_start 2011-03-05 14:00:00 (Sat)
63454975200, #      utc_end 2011-10-22 14:00:00 (Sat)
63435060000, #  local_start 2011-03-06 02:00:00 (Sun)
63455018400, #    local_end 2011-10-23 02:00:00 (Sun)
43200,
0,
'FJT',
    ],
    [
63454975200, #    utc_start 2011-10-22 14:00:00 (Sat)
63462837600, #      utc_end 2012-01-21 14:00:00 (Sat)
63455022000, #  local_start 2011-10-23 03:00:00 (Sun)
63462884400, #    local_end 2012-01-22 03:00:00 (Sun)
46800,
1,
'FJST',
    ],
    [
63462837600, #    utc_start 2012-01-21 14:00:00 (Sat)
63486424800, #      utc_end 2012-10-20 14:00:00 (Sat)
63462880800, #  local_start 2012-01-22 02:00:00 (Sun)
63486468000, #    local_end 2012-10-21 02:00:00 (Sun)
43200,
0,
'FJT',
    ],
    [
63486424800, #    utc_start 2012-10-20 14:00:00 (Sat)
63494287200, #      utc_end 2013-01-19 14:00:00 (Sat)
63486471600, #  local_start 2012-10-21 03:00:00 (Sun)
63494334000, #    local_end 2013-01-20 03:00:00 (Sun)
46800,
1,
'FJST',
    ],
    [
63494287200, #    utc_start 2013-01-19 14:00:00 (Sat)
63517874400, #      utc_end 2013-10-19 14:00:00 (Sat)
63494330400, #  local_start 2013-01-20 02:00:00 (Sun)
63517917600, #    local_end 2013-10-20 02:00:00 (Sun)
43200,
0,
'FJT',
    ],
    [
63517874400, #    utc_start 2013-10-19 14:00:00 (Sat)
63525736800, #      utc_end 2014-01-18 14:00:00 (Sat)
63517921200, #  local_start 2013-10-20 03:00:00 (Sun)
63525783600, #    local_end 2014-01-19 03:00:00 (Sun)
46800,
1,
'FJST',
    ],
    [
63525736800, #    utc_start 2014-01-18 14:00:00 (Sat)
63549324000, #      utc_end 2014-10-18 14:00:00 (Sat)
63525780000, #  local_start 2014-01-19 02:00:00 (Sun)
63549367200, #    local_end 2014-10-19 02:00:00 (Sun)
43200,
0,
'FJT',
    ],
    [
63549324000, #    utc_start 2014-10-18 14:00:00 (Sat)
63557186400, #      utc_end 2015-01-17 14:00:00 (Sat)
63549370800, #  local_start 2014-10-19 03:00:00 (Sun)
63557233200, #    local_end 2015-01-18 03:00:00 (Sun)
46800,
1,
'FJST',
    ],
    [
63557186400, #    utc_start 2015-01-17 14:00:00 (Sat)
63580773600, #      utc_end 2015-10-17 14:00:00 (Sat)
63557229600, #  local_start 2015-01-18 02:00:00 (Sun)
63580816800, #    local_end 2015-10-18 02:00:00 (Sun)
43200,
0,
'FJT',
    ],
    [
63580773600, #    utc_start 2015-10-17 14:00:00 (Sat)
63589240800, #      utc_end 2016-01-23 14:00:00 (Sat)
63580820400, #  local_start 2015-10-18 03:00:00 (Sun)
63589287600, #    local_end 2016-01-24 03:00:00 (Sun)
46800,
1,
'FJST',
    ],
    [
63589240800, #    utc_start 2016-01-23 14:00:00 (Sat)
63612828000, #      utc_end 2016-10-22 14:00:00 (Sat)
63589284000, #  local_start 2016-01-24 02:00:00 (Sun)
63612871200, #    local_end 2016-10-23 02:00:00 (Sun)
43200,
0,
'FJT',
    ],
    [
63612828000, #    utc_start 2016-10-22 14:00:00 (Sat)
63620690400, #      utc_end 2017-01-21 14:00:00 (Sat)
63612874800, #  local_start 2016-10-23 03:00:00 (Sun)
63620737200, #    local_end 2017-01-22 03:00:00 (Sun)
46800,
1,
'FJST',
    ],
    [
63620690400, #    utc_start 2017-01-21 14:00:00 (Sat)
63644277600, #      utc_end 2017-10-21 14:00:00 (Sat)
63620733600, #  local_start 2017-01-22 02:00:00 (Sun)
63644320800, #    local_end 2017-10-22 02:00:00 (Sun)
43200,
0,
'FJT',
    ],
    [
63644277600, #    utc_start 2017-10-21 14:00:00 (Sat)
63652140000, #      utc_end 2018-01-20 14:00:00 (Sat)
63644324400, #  local_start 2017-10-22 03:00:00 (Sun)
63652186800, #    local_end 2018-01-21 03:00:00 (Sun)
46800,
1,
'FJST',
    ],
    [
63652140000, #    utc_start 2018-01-20 14:00:00 (Sat)
63675727200, #      utc_end 2018-10-20 14:00:00 (Sat)
63652183200, #  local_start 2018-01-21 02:00:00 (Sun)
63675770400, #    local_end 2018-10-21 02:00:00 (Sun)
43200,
0,
'FJT',
    ],
    [
63675727200, #    utc_start 2018-10-20 14:00:00 (Sat)
63683589600, #      utc_end 2019-01-19 14:00:00 (Sat)
63675774000, #  local_start 2018-10-21 03:00:00 (Sun)
63683636400, #    local_end 2019-01-20 03:00:00 (Sun)
46800,
1,
'FJST',
    ],
    [
63683589600, #    utc_start 2019-01-19 14:00:00 (Sat)
63707176800, #      utc_end 2019-10-19 14:00:00 (Sat)
63683632800, #  local_start 2019-01-20 02:00:00 (Sun)
63707220000, #    local_end 2019-10-20 02:00:00 (Sun)
43200,
0,
'FJT',
    ],
    [
63707176800, #    utc_start 2019-10-19 14:00:00 (Sat)
63715039200, #      utc_end 2020-01-18 14:00:00 (Sat)
63707223600, #  local_start 2019-10-20 03:00:00 (Sun)
63715086000, #    local_end 2020-01-19 03:00:00 (Sun)
46800,
1,
'FJST',
    ],
    [
63715039200, #    utc_start 2020-01-18 14:00:00 (Sat)
63738626400, #      utc_end 2020-10-17 14:00:00 (Sat)
63715082400, #  local_start 2020-01-19 02:00:00 (Sun)
63738669600, #    local_end 2020-10-18 02:00:00 (Sun)
43200,
0,
'FJT',
    ],
    [
63738626400, #    utc_start 2020-10-17 14:00:00 (Sat)
63747093600, #      utc_end 2021-01-23 14:00:00 (Sat)
63738673200, #  local_start 2020-10-18 03:00:00 (Sun)
63747140400, #    local_end 2021-01-24 03:00:00 (Sun)
46800,
1,
'FJST',
    ],
    [
63747093600, #    utc_start 2021-01-23 14:00:00 (Sat)
63770680800, #      utc_end 2021-10-23 14:00:00 (Sat)
63747136800, #  local_start 2021-01-24 02:00:00 (Sun)
63770724000, #    local_end 2021-10-24 02:00:00 (Sun)
43200,
0,
'FJT',
    ],
    [
63770680800, #    utc_start 2021-10-23 14:00:00 (Sat)
63778543200, #      utc_end 2022-01-22 14:00:00 (Sat)
63770727600, #  local_start 2021-10-24 03:00:00 (Sun)
63778590000, #    local_end 2022-01-23 03:00:00 (Sun)
46800,
1,
'FJST',
    ],
    [
63778543200, #    utc_start 2022-01-22 14:00:00 (Sat)
63802130400, #      utc_end 2022-10-22 14:00:00 (Sat)
63778586400, #  local_start 2022-01-23 02:00:00 (Sun)
63802173600, #    local_end 2022-10-23 02:00:00 (Sun)
43200,
0,
'FJT',
    ],
    [
63802130400, #    utc_start 2022-10-22 14:00:00 (Sat)
63809992800, #      utc_end 2023-01-21 14:00:00 (Sat)
63802177200, #  local_start 2022-10-23 03:00:00 (Sun)
63810039600, #    local_end 2023-01-22 03:00:00 (Sun)
46800,
1,
'FJST',
    ],
    [
63809992800, #    utc_start 2023-01-21 14:00:00 (Sat)
63833580000, #      utc_end 2023-10-21 14:00:00 (Sat)
63810036000, #  local_start 2023-01-22 02:00:00 (Sun)
63833623200, #    local_end 2023-10-22 02:00:00 (Sun)
43200,
0,
'FJT',
    ],
    [
63833580000, #    utc_start 2023-10-21 14:00:00 (Sat)
63841442400, #      utc_end 2024-01-20 14:00:00 (Sat)
63833626800, #  local_start 2023-10-22 03:00:00 (Sun)
63841489200, #    local_end 2024-01-21 03:00:00 (Sun)
46800,
1,
'FJST',
    ],
    [
63841442400, #    utc_start 2024-01-20 14:00:00 (Sat)
63865029600, #      utc_end 2024-10-19 14:00:00 (Sat)
63841485600, #  local_start 2024-01-21 02:00:00 (Sun)
63865072800, #    local_end 2024-10-20 02:00:00 (Sun)
43200,
0,
'FJT',
    ],
];

sub olson_version { '2013a' }

sub has_dst_changes { 18 }

sub _max_year { 2023 }

sub _new_instance
{
    return shift->_init( @_, spans => $spans );
}

sub _last_offset { 43200 }

my $last_observance = bless( {
  'format' => 'FJ%sT',
  'gmtoff' => '12:00',
  'local_start_datetime' => bless( {
    'formatter' => undef,
    'local_rd_days' => 699372,
    'local_rd_secs' => 256,
    'offset_modifier' => 0,
    'rd_nanosecs' => 0,
    'tz' => bless( {
      'name' => 'floating',
      'offset' => 0
    }, 'DateTime::TimeZone::Floating' ),
    'utc_rd_days' => 699372,
    'utc_rd_secs' => 256,
    'utc_year' => 1916
  }, 'DateTime' ),
  'offset_from_std' => 0,
  'offset_from_utc' => 43200,
  'until' => [],
  'utc_start_datetime' => bless( {
    'formatter' => undef,
    'local_rd_days' => 699371,
    'local_rd_secs' => 43456,
    'offset_modifier' => 0,
    'rd_nanosecs' => 0,
    'tz' => bless( {
      'name' => 'floating',
      'offset' => 0
    }, 'DateTime::TimeZone::Floating' ),
    'utc_rd_days' => 699371,
    'utc_rd_secs' => 43456,
    'utc_year' => 1916
  }, 'DateTime' )
}, 'DateTime::TimeZone::OlsonDB::Observance' )
;
sub _last_observance { $last_observance }

my $rules = [
  bless( {
    'at' => '2:00',
    'from' => '2010',
    'in' => 'Oct',
    'letter' => 'S',
    'name' => 'Fiji',
    'offset_from_std' => 3600,
    'on' => 'Sun>=18',
    'save' => '1:00',
    'to' => 'max',
    'type' => undef
  }, 'DateTime::TimeZone::OlsonDB::Rule' ),
  bless( {
    'at' => '3:00',
    'from' => '2012',
    'in' => 'Jan',
    'letter' => '',
    'name' => 'Fiji',
    'offset_from_std' => 0,
    'on' => 'Sun>=18',
    'save' => '0',
    'to' => 'max',
    'type' => undef
  }, 'DateTime::TimeZone::OlsonDB::Rule' )
]
;
sub _rules { $rules }


1;

