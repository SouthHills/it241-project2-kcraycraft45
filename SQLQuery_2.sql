CREATE SCHEMA SQL_INJECTION_PROJECT;

CREATE TABLE SQL_INJECTION_PROJECT.LOGINS(
    USERNAME VARCHAR(50) PRIMARY KEY,
    PASSWORD VARCHAR(50) NOT NULL
);

INSERT INTO SQL_INJECTION_PROJECT.LOGINS (USERNAME, PASSWORD) VALUES
('CosmicExplorer', 'Starlight!1'),
('NinjaTaco', 'GuacAndRoll'),
('QuantumDreamer', 'WaveFunction'),
('SassyPanda', 'BambooLover'),
('VintageVoyager', 'Retro123'),
('MellowMelody', 'TuneIn2023'),
('WhimsicalWizard', 'MagicSpells'),
('GalacticGiraffe', 'NeckAndNeck'),
('EpicEagle', 'SoarHigh!'),
('CaffeinatedCat', 'MeowMeow123'),
('FunkyFalcon', 'FeatheredFrenzy'),
('MysticMermaid', 'OceanWaves'),
('BubblyBard', 'SongOfJoy'),
('CharmingChameleon', 'ColorMe!'),
('RogueRaccoon', 'TrashBandit'),
('RadiantRaven', 'DarkFeathers'),
('WittyWalrus', 'BlubberFun'),
('DaringDolphin', 'SplashZone!'),
('CuriousCactus', 'PricklyPear'),
('JoyfulJellyfish', 'UnderseaDance'),
('BreezyBumblebee', 'BuzzBuzz123'),
('ZenZebra', 'StripeLife'),
('EpicEmu', 'FlightlessAdventure'),
('FrostyFox', 'ChillVibes'),
('EnchantedElf', 'ForestMagic!');


INSERT INTO SQL_INJECTION_PROJECT.LOGINS (USERNAME, PASSWORD) VALUES
('SavvySeahorse', 'OceanMystery!'),
('CheekyChinchilla', 'FluffBall123'),
('DazzlingDragon', 'FireAndIce'),
('GigglingGnome', 'WhimsyWorld'),
('KookyKangaroo', 'JumpAround!'),
('SingingStarfish', 'TidalTunes'),
('BoldBadger', 'Underground!'),
('RadiantRhino', 'HornOfPlenty'),
('CleverCoyote', 'HowlAtNight'),
('NiftyNarwhal', 'HornedWonder'),
('JollyJester', 'Prankster123'),
('CuriousCrab', 'ShellYeah!'),
('SleekSnowyOwl', 'NightWatch'),
('FrolickingFawn', 'MeadowMagic'),
('HarmoniousHedgehog', 'SpikyMelody'),
('GallopingGazelle', 'GracefulRun!'),
('MirthfulMongoose', 'QuickAndClever'),
('VibrantVulture', 'SkyHigh!'),
('LivelyLynx', 'PounceTime'),
('BouncyBison', 'WildAndFree'),
('CharmingChowder', 'Soup-erBowl'),
('DapperDolphin', 'Fin-tastic!'),
('GregariousGecko', 'StickyFeet123'),
('PlayfulPenguin', 'IceIceBaby!'),
('WhirlwindWolf', 'PackLeader'),
('RadiantRaccoon', 'NightBandit!');

SELECT * FROM SQL_INJECTION_PROJECT.LOGINS;