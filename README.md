# HostGroups Creation for Zabbix Admin users

**HostGroups Creation for Zabbix Admin users** is a Zabbix frontend module that allows Zabbix Admin users to create host groups within the scope of their existing write-accessible host groups.  
This extends the default Zabbix functionality, enabling admins (not just super admins) to better organize and manage hosts within their permitted domains.

## 🧾 License

This software is licensed under the [GNU Lesser General Public License v3.0 (LGPL-3.0)](https://www.gnu.org/licenses/lgpl-3.0.html).

## 📦 Download

You can find the latest version of the module for supported Zabbix releases on the [GitHub Releases page](https://github.com).

## ⚙️ Requirements

- Zabbix 6.0 or later
- Write access to the Zabbix frontend server file system

## 🧩 Installation

For Debian and Ubuntu systems, Zabbix frontend modules are typically located in:

/usr/share/zabbix/modules/


1. Copy the folder `zabbix_module_create_hostgroups_as_admin_user` to `/usr/share/zabbix/modules/zabbix_module_create_hostgroups_as_admin_user`. You can use `git clone` for the best result.

2. Place it on your Zabbix frontend web server.

3. In the Zabbix web interface, navigate to:  
   `Administration → General → Modules`

4. Click **Scan directory**.

5. Enable the newly detected module **Admin HostGroups**.

## 🚀 Usage

Once activated, a new menu entry **"Create Host Groups (Admin)"** will appear under:

`Data collections` (visible to Zabbix Admin users).

The creation form closely resembles the default host group creation form used by Super Admins,  
but it is restricted to creating subgroups only under host groups where the current admin user has read/write permissions.

## 💡 Example Use Case

A Zabbix Admin responsible for a specific environment (e.g., **Production** or **Development**) can now create additional nested host groups within that environment — without requiring Super Admin privileges.

## 🧱 Contributing

Contributions, suggestions, and bug reports are welcome!  
Please open an issue or pull request on [GitHub](https://github.com).

## 🙌 Acknowledgements

Developed and maintained by **Saumyajit**.  
Special thanks to the Zabbix community for continuous inspiration and support.
