<?php

return [
    'alipay' => [
        'app_id'         => '2016091700533782',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzvhRCoWnX5A6v0JA+mDNTher1Jli2Z+dtBNHLIDsxJsmvRyHCmpLZw/7s6qzOoYokLxt9JbKE4wkpvi4K0bXpJUzM9JQOChfWwLCTlwRUB1IHUwCFKDayjWMCFoC4lm9J8Y2RxENxu1GletfJ1JBL8a0Rls+KADg6ld+HYPmDTUUD14D5h9QGcTYp9w+4ItpjkF72Ok0yzJ5oJtkhXuDXkcWdtjcD/YjWjkBPeiKt0u9Yar1KNirIRIFlAdMwywGg+HTjYyOd0U9sNJhoBjs5fEVZLeNvdTDWUiynB3Rae+0UCFcT7mq7HtMHlt2wsV3yfZQ41i6UpOu42lNGd3yswIDAQAB',
        'private_key'    => 'MIIEpgIBAAKCAQEA09iG9kktcChCr7acwcj1demJ5rAYOP54zntHgBaJXVo3KrzTHvoY5j3EdSKYizflHx5ktM21JBOnvwmxt2GROf3ViIV0c6MfyCNk7fC+RHEFDOd9G4dTGEECWjxIFkyYzrdrjFiS90iyy7wYp2yotLKXA8s0IUq3+NWdKe2V6qemh7EYkV7UgNmo9kTLwRJaVHuiq3SYEM5lb+RKlJ/uFO0fIqdA2EiEDNk5b25v1hX8SD5ZTb+f9a1SIViSuTTsZjx9Y2snDg0K7me2P0h2tfM69at8Rbn78uWtcZ2opG/1M15uFTBBp7LbASJVXbn8rXTf01gpGFW0Jo+/AAHNGQIDAQABAoIBAQCEP+tZOyu7ldazvSu1KlBaUPX+5rXodqxSMtHbG7abaaOA8apW70i2C59mhLd4SeemeqHh4X2QzRhugY3JboZsDpPMi4u8WPyRQ89RX3ZYYboGaUlH8z4jqQnf7TwPd7f5bLYeQnlVGLRNzdoSQxo63Da8bpHXqr6ZADoCH8j0WJwC95Y3d9TKp+aLi72kVm3BuehTz3jSYg1jUDSMzJeuJ4eHJBJys7CWR7sku7cXKsTYexQv/seIHNEcMluX5+ypf1LEujY+7y6fcpJmO3h54UIhTTIUSSVFrM+1q/UaBauGaAS3sck7jyExTjFtWefRZ+W3bhOvwKld9Y8x9e4BAoGBAPE1BxBNAk6W4Ws82rrzDUBmdwHm5VjqvDahsXY18OegyFxdV+Mkw9BCFtj0BjPwBwdyt1bhv22apNr7uGfdTS1bjnJ/nk6mPbTZWDlLFPhr52+Wlgj5QnZCu1sllqdN/Oq8VpRlgqviFSqdWBMjqeiDiQt7vHaqeCwvMkj/Y+XZAoGBAODWhjVzJWOz8NzV1sIIWuyW2fW/kuc2EkjNQAB1OjgswQ39iIWMYpYbsApq+6KuCezvm5dmC0zGKpQC4gNWRhA9DnbJ0HGBWVqIj4E0KbCtFhzJTbs40v4QnOtYNlEyvbeGi4nFdmDfH81oawBF0WZH8eeH69HHWNwAqE7xHFlBAoGBALWwse9vcqtsL8SthD2KU5MNG9vM5zmBJ+EnDxvyKdLwY7xfe5JX4UAAaGFn/zwkM8dCfCPvzFhtQnzJW/Cw3C+sZbKNutuXkaemiDQwAE3YSe7eSYnc6FlYjvRrbf38WuUelUEW7cU3eaYt+2f/Vz8TxalmvWHNqtPtgT1HUyKRAoGBALSwMlMqIlYp+du/jkOI62lPIgK43popfjA7or+7dfpHHS7dHaYV1/TCc4srxuZJ73gWZ3gYbeRZLUadunzsDIpoRwN31KgjR2fWb11qSkbOEwM3U9yuIgJD35fS4HQIzyZ6XhFuO2BGcAxnafZiJZKJJwLm3MFN7z9+18P5SMsBAoGBALNU2opgUJlTSijjRvL4+J5Spk8sYL8GqQNTWlC6W0+mBTA1leAud2XEcr4GtBcxsd7JbslbU24PqdUfsWoyUmlvUPnBQO+8J9vnWIV6hU0jVQ0vXRTNdjKDX4aWn5Ew3CAdZPuRSZz1jpxygOLzucEl+3aFky3V8W2e5MmoOlTx',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];